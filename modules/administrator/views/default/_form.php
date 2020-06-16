<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\CompanyInfo */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="company-info-form">    
    <div class="d-flex justify-content-end mb-4">            
        <div class="ml-auto">
            <?= Html::a('<span class="glyphicon glyphicon-th-list"></span> Index', ['index'], ['class' => 'btn btn-info waves-effect waves-light']) ?>       
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">           

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'mission')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'goal')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'twitter_link')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'youtube_link')->textInput(['maxlength' => true]) ?>

            <div class="form-group pt-3">
                <div class="btn-group" role="group">
                    <?= Html::submitButton('Simpan', ['class' => 'btn btn-success waves-effect waves-light']) ?>
                    <?= Html::a('Batal', Yii::$app->request->referrer, ['class' => 'btn btn-secondary waves-effect waves-light']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
