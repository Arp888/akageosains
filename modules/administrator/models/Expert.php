<?php

namespace app\modules\administrator\models;

use Yii;

/**
 * This is the model class for table "expert".
 *
 * @property int $id
 * @property string $name
 * @property string $position
 * @property string $description
 * @property string $picture
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $instagram_link
 * @property string $linkedin_link
 * @property int $order
 * @property int $publish
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 */
class Expert extends \yii\db\ActiveRecord
{
    const UNPUBLISHED = 0;
    const PUBLISHED = 10; 

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'expert';
    }

    public function behaviors()
    {
        return [
            [
                'class' => \yii\behaviors\TimestampBehavior::className(),
            ],
            [
                'class' => \yii\behaviors\BlameableBehavior::className(),
            ],
            [
                'class' => \arogachev\sortable\behaviors\numerical\ContinuousNumericalSortableBehavior::className(),
                'sortAttribute' => 'order',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'position', 'description', 'picture'], 'required', 'message' => '{attribute} harus diisi.'],
            [['description'], 'string'],
            [['order', 'publish', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['name', 'position'], 'string', 'max' => 150],
            [['picture'], 'string', 'max' => 255],
            ['publish', 'default', 'value' => self::UNPUBLISHED],
            ['publish', 'in', 'range' => [self::UNPUBLISHED, self::PUBLISHED]],
            [['facebook_link', 'twitter_link', 'instagram_link', 'linkedin_link'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama',
            'position' => 'Jabatan',
            'description' => 'Deskripsi',
            'picture' => 'Gambar',
            'facebook_link' => 'Facebook Link',
            'twitter_link' => 'Twitter Link',
            'instagram_link' => 'Instagram Link',
            'linkedin_link' => 'Linkedin Link',
            'order' => 'Urutan',
            'publish' => 'Status Publikasi',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    public static function arrStatus() 
    {
        return [
            self::UNPUBLISHED => 'Tidak',
            self::PUBLISHED => 'Ya'
        ];
    }
}
