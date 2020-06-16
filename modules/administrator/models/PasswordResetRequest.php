<?php
namespace app\modules\administrator\models;

use Yii;
use app\modules\administrator\models\User;
use yii\base\Model;

/**
 * Password reset request form
 */
class PasswordResetRequest extends Model
{
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required', 'message' => 'Alamat email tidak boleh kosong.'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => 'app\modules\administrator\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'Tidak ada user dengan email tersebut.'
            ],
        ];
    }

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return boolean whether the email was send
     */
    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if ($user) {
            if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
                $user->generatePasswordResetToken();
            }

            if ($user->save()) {
                \Yii::$app->mailer->setTransport( [
                    'class' => 'Swift_SmtpTransport',
                    'host' => 'mail.isuzugallery.com',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                    'username' => 'support@isuzugallery.com',
                    'password' => 'support1234',
                    'port' => '587', // Port 25 is a very common port too
                    'encryption' => 'tls', // It is often used, check your provider or mail server specs
                    'streamOptions' => [
                        'ssl' => [
                            'allow_self_signed' => true,
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                        ],
                    ],
                ]);
             
                return Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $user])
                    ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
                    ->setTo($this->email)
                    ->setSubject('Password reset for ' . Yii::$app->name)
                    ->send();
            }
        }

        return false;
    }
}
