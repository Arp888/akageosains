<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\PasswordResetRequest */

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    
    <div class="row">
        <div class="col-lg-12">
            <p>Silahkan isi alamat email Anda. Tautan untuk mereset password akan dikirim ke email tersebut.</p>
            
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

            <?= $form->field($model, 'email', ['template' => '{input}{label}{error}'])->textInput(['class' => 'input-material'])->label('Email', ['class' => 'label-material']) ?>
                        
            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Kirim', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    <?= Html::a('Batal', ['/administrator/user/login'], ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
