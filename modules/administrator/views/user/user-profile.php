<?php

use yii\helpers\Html;
use app\models\User;

$this->title = 'Profil Pengguna';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class='user-profile'>
    <div class="card-box">
        <div class="d-flex justify-content-end mb-3">   
            <div class="btn-group" role="group">
                <div class="btn-group" role="group">
                    <?= Html::a('Perbarui Profil', ['user-profile-update', 'id' => $model->id], ['class' => 'btn btn-primary btn-custom w-md waves-effect waves-light']) ?>
                    <?= Html::a('Ubah Password', ['change-password'], ['class' => 'btn btn-success btn-custom w-md waves-effect waves-light']) ?>
                </div>
            </div>
        </div>

        <div class="row mt-3">  
            <div class="col-md-3 mb">
                <?= Html::img($model->getImageUrl(), ['class' => 'img-thumbnail circle', 'width' => 200, 'height' => 200]) ?>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><strong>Username</strong></div>
                            <div class="col-md-9"><?= Html::encode($model->username) ?></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><strong>Nama Lengkap</strong></div>
                            <div class="col-md-9"><?= Html::encode($model->fullname) ?></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><strong>Email</strong></div>
                            <div class="col-md-9"><?= Html::encode($model->email) ?></div>
                        </div> 
                        <hr>           
                    </div>
                </div>               
            </div>
        </div>	
    </div>
</div>