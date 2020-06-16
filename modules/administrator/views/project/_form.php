<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Project */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="project-form">    
    <div class="d-flex justify-content-end mb-4">            
        <div class="ml-auto">
            <?= Html::a('<span class="glyphicon glyphicon-th-list"></span> Index', ['index'], ['class' => 'btn btn-info btn-custom w-md waves-effect waves-light']) ?>       
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-1">           

            <?php $form = ActiveForm::begin([
                'id' => 'project-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'options' => ['class' => 'form-group row'],
                    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                    'hintOptions' => ['class' => 'form-text font-13 text-muted', 'tag' => 'span'],
                    'errorOptions' => ['tag' => 'div', 'class' => 'form-text font-13 text-danger'],
                    'horizontalCssClasses' => [
                        'label' => 'col-sm-3 col-md-2 col-form-label',
                        'offset' => 'col-sm-3 col-md-2',
                        'wrapper' => 'col-sm-9',
                        'error' => '',
                        'hint' => '',
                    ],
                ],
            ]); ?>

            <?= $form->field($model, 'client_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'study_type')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'commodity')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'location_coordinates')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'publish', [
                    'template' => "<label class='col-sm-3 col-md-2 col-form-label'>{label}</label>\n<div class='col-9'>{input}\n{hint}\n{error}</div>\n"
                ])->checkBox(['data-plugin' => 'switchery', 'data-color' => '#3DDCF7', 'label' => $model->getAttributeLabel('publish'), 'value' => 10], false) 
            ?>

            <div class="form-group row mb-3">
                <div class="col-sm-10 offset-md-2 offset-sm-3">
                    <div class="btn-group" role="group">
                        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success btn-custom w-md waves-effect waves-light']) ?>
                        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-secondary btn-custom w-md waves-effect waves-light']) ?>
                    </div>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
