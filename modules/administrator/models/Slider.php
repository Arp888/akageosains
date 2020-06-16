<?php

namespace app\modules\administrator\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $subtitle
 * @property integer $order
 * @property integer $publish
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 */
class Slider extends \yii\db\ActiveRecord
{
    const UNPUBLISHED = 0;
    const PUBLISHED = 10; 

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
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
            [['image', 'title', 'subtitle'], 'required', 'message' => '{attribute} harus diisi.'],
            [['order', 'publish', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['image'], 'string', 'max' => 255],
            ['publish', 'default', 'value' => self::UNPUBLISHED],
            ['publish', 'in', 'range' => [self::UNPUBLISHED, self::PUBLISHED]],
            [['title', 'subtitle'], 'string', 'max' => 150],
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
            'title' => 'Caption',
            'subtitle' => 'Subtitle',
            'order' => 'Urutan',
            'publish' => 'Status Publikasi',
            'created_at' => 'Dibuat Tanggal',
            'created_by' => 'Dibuat Oleh',
            'updated_at' => 'Diperbarui Tanggal',
            'updated_by' => 'Diperbarui Oleh',
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
