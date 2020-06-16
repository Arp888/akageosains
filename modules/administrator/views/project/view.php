<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Project */

$this->title = 'Rincian Project';
$this->params['breadcrumbs'][] = ['label' => 'Project', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">
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
           
        <?= DetailView::widget([
            'model' => $model,
            'options' => ['class' => 'table'],
            'template' => '<tr class="d-flex"><th class="col-lg-3 col-md-3">{label}</th><td class="col-lg-9 col-md-9">{value}</td></tr>',
            'attributes' => [
                // 'id',
                'client_name',
                'study_type',
                'region',
                'commodity',
                'location_coordinates',
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
