<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Company Info';
$this->params['breadcrumbs'][] = $this->title;

// var_dump($model); die();

?>
<div class="company-info-index">
    <div class="card-box">       

        <div class="d-flex justify-content-end mb-3">
            <?php 
                if (empty($model) || $model == []) {
                    $label = '<span class="glyphicon glyphicon-plus"></span> Tambah Data';
                    $url = ['create'];
                    $class = 'btn btn-success waves-effect waves-light';
                 } else {
                    $label = '<span class="glyphicon glyphicon-pencil"></span> Perbarui Data';
                    $url = ['update', 'id' => $model['id']];
                    $class = 'btn btn-primary waves-effect waves-light';
                 }
            ?>
            <?= Html::a($label, $url, ['class' => $class]) ?>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= DetailView::widget([
                    'model' => $model,
                    'options' => ['class' => 'table'],
                    'template' => '<tr class="d-flex"><th class="col-lg-4 col-md-4">{label}</th><td class="col-lg-8 col-md-8 bg-light">{value}</td></tr>',
                    'attributes' => [
                        [
                            'attribute' => 'logo_dark',
                            'format' => 'raw',
                            'value' => (!empty($model->logo_dark) ? Html::img(\Yii::$app->imagemanager->getImagePath($model->logo_dark, 190, 50, 'inset')) : null),
                            
                        ],

                        [
                            'attribute' => 'logo_light',
                            'format' => 'raw',
                            'value' => (!empty($model->logo_light) ? Html::img(\Yii::$app->imagemanager->getImagePath($model->logo_light, 190, 50, 'inset')) : null),
                            
                        ],
                        'overview:raw',
                        'description:raw',
                        'mission:raw',
                        'goal:raw',                                                
                    ],
                ]) ?>
            </div>

            <div class="col-md-6">
                <?= DetailView::widget([
                    'model' => $model,
                    'options' => ['class' => 'table'],
                    'template' => '<tr class="d-flex"><th class="col-lg-4 col-md-4 bg-light">{label}</th><td class="col-lg-8 col-md-8">{value}</td></tr>',
                    'attributes' => [ 
                        'address:raw',
                        'phone',
                        'email:email',                       
                        'facebook_link',
                        'twitter_link',
                        'instagram_link',
                        'youtube_link',
                    ],
                ]) ?>
            </div>
        </div>                                  
    </div>
</div>
