<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\ResetPassword */

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <div class="row">
        <div class="col-lg-12">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>Silahkan pilih password baru Anda:</p>
            
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
            
            <?= $form->field($model, 'password', ['template' => '{input}{label}{error}'])->passwordInput(['class' => 'input-material'])->label('Password Baru', ['class' => 'label-material']) ?>
            
            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
