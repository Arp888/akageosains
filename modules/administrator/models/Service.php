<?php

namespace app\modules\administrator\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $overview
 * @property string $description
 * @property string $slug
 * @property string $tag
 * @property int $order
 * @property int $publish
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 */
class Service extends \yii\db\ActiveRecord
{
    const UNPUBLISHED = 0;
    const PUBLISHED = 10; 
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
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
            [
                'class' => \yii\behaviors\SluggableBehavior::className(),
                'attribute' => 'name',
                'slugAttribute' => 'slug',
                'immutable' => true,
                'ensureUnique' => true,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'name', 'overview', 'description', 'tag'], 'required', 'message' => '{attribute} harus diisi.'],
            [['overview', 'description', 'tag'], 'string'],
            [['order', 'publish', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            ['publish', 'default', 'value' => self::UNPUBLISHED],
            ['publish', 'in', 'range' => [self::UNPUBLISHED, self::PUBLISHED]],
            [['image', 'name', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Gambar',
            'name' => 'Nama',
            'overview' => 'Overview',
            'description' => 'Deskripsi Detail',
            'slug' => 'Slug',
            'tag' => 'Tag',
            'order' => 'Order',
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
