<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\ChangePassword */

$this->title = 'Ubah Password';
$this->params['breadcrumbs'][] = ['label' => 'Profil Pengguna', 'url' => ['user-profile', 'id' => Yii::$app->user->identity->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-change-password">
    <div class="card-box">
        <div class="d-flex justify-content-end mb-3">
            <?= Html::a('<span class="glyphicon glyphicon-th-list"></span> Kembali ke Profil', ['user-profile', 'id' =>Yii::$app->user->identity->id], ['class' => 'btn btn-info waves-effect waves-light']) ?>       
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <?php $form = ActiveForm::begin([
                    'id' => 'form-change',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'options' => ['class' => 'form-group row'],
                        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                        'horizontalCssClasses' => [
                            'label' => 'col-sm-3 col-md-3 col-form-label',
                            'offset' => 'col-sm-3 col-md-3',
                            'wrapper' => 'col-sm-8',
                            'error' => '',
                            'hint' => '',
                        ],
                    ],
                ]); ?>
        
                <?= $form->field($model, 'oldPassword')->passwordInput(['placeholder' => 'Password Lama'])->label('Password Lama') ?>
                <?= $form->field($model, 'newPassword')->passwordInput(['placeholder' => 'Password Baru'])->label('Password Baru') ?>
                <?= $form->field($model, 'retypePassword')->passwordInput(['placeholder' => 'Ulang Password Baru'])->label('Ulangi Password Baru') ?>
                
                <div class="form-group row mb-3">
                    <div class="col-sm-10 offset-md-3 offset-sm-3">
                        <div class="btn-group" role="group">
                            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success btn-custom w-md waves-effect waves-light']) ?>
                            <?= Html::a('Batal', Yii::$app->request->referrer, ['class' => 'btn btn-secondary btn-custom w-md waves-effect waves-light']) ?>
                        </div>
                    </div>
                </div>              
        
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
