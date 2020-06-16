<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\ServiceSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'options' => ['class' => 'form-row align-items-center'],
        'method' => 'get',
    ]); ?>
    
    <div class="col-sm-3 my-1">
        <?php echo $form->field($model, 'publish', ['options' => ['tag' => false]])->dropDownList([10 => 'Dipublikasi', 0 => 'Tidak Dipublikasi'], ['class' => 'form-control custom-select mr-sm-2', 'prompt' => 'Semua status'])->label('Status', ['class' => 'sr-only'])->error(false) ?>
    </div>
    <div class="col-sm-3 my-1">
        <?= $form->field($model, 'name', ['options' => ['tag' => false]])->textInput(['class' => 'form-control mr-sm-2', 'placeholder' => 'Cari...'])->label('Klien', ['class' => 'sr-only'])->error(false) ?>
    </div>
    <div class="col-sm-3 my-1">
        <?= Html::submitButton('Filter', ['class' => 'btn btn-warning btn-custom w-md waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>
