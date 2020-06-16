<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">   
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',        
    ]); ?>

    <?= $form->field($model, 'username', ['template' => '{input}{label}{error}'])->textInput(['class' => 'input-material'])->label('User Name', ['class' => 'label-material']) ?>

    <?= $form->field($model, 'password', ['template' => '{input}{label}{error}'])->passwordInput(['class' => 'input-material'])->label('Password', ['class' => 'label-material']) ?>

    <?= $form->field($model, 'rememberMe', ['options' => ['style' => 'margin-bottom:5px']])->checkbox([
        'id' => 'checkboxCustom',
        'class' => 'checkbox-template',
        'template' => "<div class=\"i-checks\">{input}{label}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ]) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

    <?= Html::a('Lupa Password', ['request-password-reset'], ['class' => 'forgot-pass']) ?>
   
</div>

