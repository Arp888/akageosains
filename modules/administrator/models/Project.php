<?php

namespace app\modules\administrator\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $client_name
 * @property string $study_type
 * @property string $region
 * @property string $commodity
 * @property string $location_coordinates
 * @property int $order
 * @property int $publish
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 */
class Project extends \yii\db\ActiveRecord
{
    const UNPUBLISHED = 0;
    const PUBLISHED = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
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
            [['client_name', 'study_type', 'region', 'commodity', 'location_coordinates'], 'required', 'message' => '{attribute} harus diisi.'],
            [['order', 'publish', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['client_name', 'study_type', 'region', 'commodity'], 'string', 'max' => 150],
            [['location_coordinates'], 'string', 'max' => 100],
            ['publish', 'default', 'value' => self::UNPUBLISHED],
            ['publish', 'in', 'range' => [self::UNPUBLISHED, self::PUBLISHED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_name' => 'Nama Klien',
            'study_type' => 'Tipe Studi',
            'region' => 'Wilayah',
            'commodity' => 'Komoditas',
            'location_coordinates' => 'Koordinat Lokasi',
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
