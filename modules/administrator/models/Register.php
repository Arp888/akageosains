<?php
namespace app\modules\administrator\models;

use Yii;
use app\modules\administrator\models\User;
use yii\base\Model;

class Register extends Model
{
	public $fullname;
	public $username;
	public $email;
	public $password;
	public $role;

	public function rules()
	{
	return [
		['username', 'filter', 'filter' => 'trim'],
		[['username', 'fullname', 'role'], 'required', 'message' => 'Isian tidak boleh kosong.'],
		['username', 'unique', 'targetClass' => 'app\modules\administrator\models\User', 'message' => 'Username ini telah dipakai oleh user lain.'],
		[['username', 'fullname'], 'string', 'min' => 2, 'max' => 255],

		['role', 'integer'],

		['email', 'filter', 'filter' => 'trim'],
		['email', 'required', 'message' => 'alamat email tidak boleh kosong.'],
		['email', 'email'],
		['email', 'unique', 'targetClass' => 'app\modules\administrator\models\User', 'message' => 'Alamat email ini telah dipakai oleh user lain.'],

		['password', 'required', 'message' => 'Password tidak boleh kosong.'],
		['password', 'string', 'min' => 6],
		];
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fullname' => 'Nama Lengkap',
            'username' => 'Username',
            'email' => 'Email',
        ];
    }

	public function register()
	{
		if ($this->validate()) {
			$user = new User();
			$user->fullname = $this->fullname;
			$user->username = $this->username;
			$user->email = $this->email;
			$user->setPassword($this->password);
			$user->generatePasswordResetToken();
			$user->generateAuthKey();
			$user->role = $this->role;
			if ($user->save()) {
				return $user;
			}
		}

		return null;
	}
}