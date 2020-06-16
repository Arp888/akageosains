<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\CompanyInfo */

$this->title = 'Rincian CompanyInfo';
$this->params['breadcrumbs'][] = ['label' => 'CompanyInfo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-info-view">
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
            'template' => '<tr class="d-flex"><th class="col-lg-3 col-md-3 bg-light">{label}</th><td class="col-lg-9 col-md-9">{value}</td></tr>',
            'attributes' => [
                'id',
                'logo',
                'description:ntext',
                'mission:ntext',
                'goal:ntext',
                'address:ntext',
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
