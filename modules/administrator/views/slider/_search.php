<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\SliderSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="slider-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'options' => ['class' => 'form-row align-items-center'],
        'method' => 'get',
    ]); ?>
    
    <div class="col-sm-3 my-1">
        <?php echo $form->field($model, 'publish', ['options' => ['tag' => false]])->dropDownList([10 => 'Dipublikasi', 0 => 'Tidak Dipublikasi'], ['class' => 'form-control custom-select mr-sm-2', 'prompt' => 'Semua status'])->label('Status', ['class' => 'sr-only'])->error(false) ?>
    </div>
    <div class="col-sm-3 my-1">
        <?= Html::submitButton('Filter', ['class' => 'btn btn-warning btn-custom w-md waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
