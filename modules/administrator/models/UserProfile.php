<?php
namespace app\modules\administrator\models;

use Yii;
use app\modules\administrator\models\User;
use yii\web\UploadedFile;

class UserProfile extends \yii\db\ActiveRecord
{

	public $fileImage;

     /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

	public function rules()
	{
    	return [
    		['username', 'filter', 'filter' => 'trim'],
    		[['username', 'fullname', 'role'], 'required', 'message' => 'Isian tidak boleh kosong.'],
            ['username', 'unique', 'targetAttribute' => 'username',
                'when' => function($model, $attribute) {
                    return $model->{$attribute} !== $model->getOldAttribute($attribute);
                },
                'on' => 'update', 'message' => 'Username ini telah dipakai oleh user lain.'
            ],

    		[['username', 'fullname'], 'string', 'min' => 2, 'max' => 255],

    		['email', 'filter', 'filter' => 'trim'],
    		['email', 'required', 'message' => 'alamat email tidak boleh kosong.'],
    		['email', 'email'],
            ['email', 'unique', 'targetAttribute' => 'email',
                'when' => function($model, $attribute) {
                    return $model->{$attribute} !== $model->getOldAttribute($attribute);
                },
                'on' => 'update', 'message' => 'Alamat email ini telah dipakai oleh user lain.'
            ],

            [['avatar'], 'string', 'max' => 255],
            [['fileImage'], 'file', 'extensions' => 'png, jpg, gif', 'maxSize' => 1024 * 1024 * 1, 'on' => 'update', 'tooBig' => 'File size should not exceed maximum allowed upload size of 1024 KB'],
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
            'role' => 'Role',
            'fileImage' => 'Foto Profil',
        ];
    }

    /**
     * fetch stored image file name with complete path 
     * @return string
     */
    public function getImageFile() 
    {
        return isset($this->avatar) ? Yii::getAlias('@webroot/img/') . $this->avatar : null;
    }

    /**
     * fetch stored image url
     * @return string
     */
    public function getImageUrl() 
    {
        // return a default image placeholder if your source avatar is not found
        $avatar = isset($this->avatar) ? $this->avatar : 'profile-pic.jpg';
        return Yii::getAlias('@web/img/') . $avatar;
    }

    /**
    * Process upload of image
    *
    * @return mixed the uploaded image instance
    */
    public function uploadImage() {
        // get the uploaded file instance. for multiple file uploads
        // the following data will return an array (you may need to use
        // getInstances method)
        $image = UploadedFile::getInstance($this, 'fileImage');

        // if no image was uploaded abort the upload
        if (empty($image)) {
            return false;
        }

        // store the source file name
        $ext = end((explode(".", $image->name)));

        // generate a unique file name
        $this->avatar = Yii::$app->security->generateRandomString().".{$ext}";

        // the uploaded image instance
        return $image;
    }

    /**
    * Process deletion of image
    *
    * @return boolean the status of deletion
    */
    public function deleteImage() {
        $file = $this->getImageFile();

        // check if file exists on server
        if (empty($file) || !file_exists($file)) {
            return false;
        }

        // check if uploaded file can be deleted on server
        if (!unlink($file)) {
            return false;
        }

        // if deletion successful, reset your file attributes
        $this->avatar = null;
        return true;
    }

    // public function getRole() {
    //     $user = \app\modules\administrator\models\findOne($this->id);
    //     return $user->roleLabel;
    // }
}