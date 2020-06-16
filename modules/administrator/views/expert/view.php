<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Expert */

$this->title = 'Rincian Expert';
$this->params['breadcrumbs'][] = ['label' => 'Expert', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expert-view">
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
            <div class="col-md-3">
                <?=  Html::img(\Yii::$app->imagemanager->getImagePath($model->picture, 500, 350, 'inset'), ['class' => 'rounded-circle img-thumbnail']) ?>
            </div>
            <div class="col-md-9">                                     
                <?= DetailView::widget([
                    'model' => $model,
                    'options' => ['class' => 'table'],
                    'template' => '<tr class="d-flex"><th class="col-lg-3 col-md-3">{label}</th><td class="col-lg-9 col-md-9">{value}</td></tr>',
                    'attributes' => [
                        // 'id',
                        'name',
                        'position',
                        'description:raw',
                        'facebook_link',
                        'twitter_link',
                        'instagram_link',
                        'linkedin_link',
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
