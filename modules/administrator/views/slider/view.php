<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Slider */

$this->title = 'Rincian Slider';
$this->params['breadcrumbs'][] = ['label' => 'Slider', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-view">
    <div class="card-box"> 
        <div class="d-flex justify-content-end mb-3">   
            <?= Html::a('<span class="glyphicon glyphicon-th-list"></span> Index', ['index'], ['class' => 'btn btn-info btn-custom w-md waves-effect waves-light mr-1']) ?>
            <div class="btn-group" role="group">
                <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> Perbarui', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-custom w-md waves-effect waves-light']) ?>
                <?= Html::a('<span class="glyphicon glyphicon-trash"></span> Hapus', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger btn-custom w-md waves-effect waves-light',
                    'data' => [
                        'confirm' => 'Anda yakin ingin menghapus item ini?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>            
       
        <div class="row">
            <div class="col-md-5">
                <?=  Html::img(\Yii::$app->imagemanager->getImagePath($model->image, 500, 281, 'inset'), ['class' => 'img-fluid']) ?>
            </div>
            
            <div class="col-md-7">
                <?= DetailView::widget([
                    'model' => $model,
                    'options' => ['class' => 'table'],
                    'template' => '<tr class="d-flex"><th class="col-lg-3 col-md-3">{label}</th><td class="col-lg-9 col-md-9">{value}</td></tr>',
                    'attributes' => [
                        // 'id',
                        // 'image',
                        'title:raw',
                        'subtitle',
                        'order',
                        [
                            'attribute' => 'publish',
                            'vAlign' => 'middle',
                            'value' => function($model) {
                                $data = $model::arrStatus();
                                return $data[$model->publish];
                            }
                        ],
                        // 'created_at',
                        // 'created_by',
                        // 'updated_at',
                        // 'updated_by',
                    ],
                ]) ?>
            </div>            
        </div>
    </div>
</div>
