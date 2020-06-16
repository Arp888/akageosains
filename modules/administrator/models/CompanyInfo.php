<?php

namespace app\modules\administrator\models;

use Yii;

/**
 * This is the model class for table "company_info".
 *
 * @property int $id
 * @property string $logo_dark
 * @property string $logo_light
 * @property string $description
 * @property string $mission
 * @property string $goal
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $instagram_link
 * @property string $youtube_link
 */
class CompanyInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logo_dark', 'logo_light', 'overview', 'description', 'mission', 'goal', 'address', 'phone', 'email'], 'required', 'message' => '{attribute} harus diisi.'],
            [['overview', 'description', 'mission', 'goal', 'address'], 'string'],
            [['logo_dark', 'logo_light'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
            [['email', 'facebook_link', 'twitter_link', 'instagram_link', 'youtube_link'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo_dark' => 'Logo Gelap',
            'logo_light' => 'Logo Putih',
            'overview' => 'Overview',
            'description' => 'Tentang Perusahaan',
            'mission' => 'Misi',
            'goal' => 'Goal',
            'address' => 'Alamat',
            'phone' => 'No Telepon',
            'email' => 'Email',
            'facebook_link' => 'Facebook Link',
            'twitter_link' => 'Twitter Link',
            'instagram_link' => 'Instagram Link',
            'youtube_link' => 'Youtube Link',
        ];
    }
}
