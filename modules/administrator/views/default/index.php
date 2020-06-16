<?php 

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="administrator-default-index">

    <div class="card-box">       

        <div class="d-flex justify-content-end mb-3">
            <?php 
                if (empty($model[0]) || $model[0] == []) {
                    $label = '<span class="glyphicon glyphicon-plus"></span> Tambah Data';
                    $url = ['create'];
                    $class = 'btn btn-success waves-effect waves-light';
                 } else {
                    $label = '<span class="glyphicon glyphicon-pencil"></span> Perbarui Data';
                    $url = ['update', 'id' => $model[0]['id']];
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
                    'template' => '<tr class="d-flex"><th class="col-lg-4 col-md-4 bg-light">{label}</th><td class="col-lg-8 col-md-8">{value}</td></tr>',
                    'attributes' => [
                        'logo',
                        'description:ntext',
                        'mission:ntext',
                        'goal:ntext',
                        'address:ntext',
                        'phone',
                        'email:email',                        
                    ],
                ]) ?>
            </div>

            <div class="col-md-6">
                <?= DetailView::widget([
                    'model' => $model,
                    'options' => ['class' => 'table'],
                    'template' => '<tr class="d-flex"><th class="col-lg-4 col-md-4 bg-light">{label}</th><td class="col-lg-8 col-md-8">{value}</td></tr>',
                    'attributes' => [                        
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