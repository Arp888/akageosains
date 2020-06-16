<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Service */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="service-form">    
    <div class="d-flex justify-content-end mb-4">            
        <div class="ml-auto">
            <?= Html::a('<span class="glyphicon glyphicon-th-list"></span> Index', ['index'], ['class' => 'btn btn-info btn-custom w-md waves-effect waves-light']) ?>       
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-1">          

            <?php $form = ActiveForm::begin([
                'id' => 'service-form-form',
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

            <?= $form->field($model, 'image')->widget(\noam148\imagemanager\components\ImageManagerInputWidget::className(), [
                    'aspectRatio' => (16/9), //set the aspect ratio
                    'cropViewMode' => 1, //crop mode, option info: https://github.com/fengyuanchen/cropper/#viewmode
                    'showPreview' => true, //false to hide the preview
                    'showDeletePickedImageConfirm' => false, //on true show warning before detach image
                ]);
            ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
           
            <?= $form->field($model, 'overview')->widget(TinyMce::className(), [ 
                    'options' => ['rows' => 6], 
                    // 'language' => 'id', 
                    'clientOptions' => [ 
                        'branding' => false,
                        'menubar' => false,
                        'file_browser_callback' => new yii\web\JsExpression("function(field_name, url, type, win) {
                            window.open('".yii\helpers\Url::to(['/imagemanager/manager', 'view-mode'=>'iframe', 'select-type'=>'tinymce'])."&tag_name='+field_name,'','width=800,height=540 ,toolbar=no,status=no,menubar=no,scrollbars=no,resizable=no');
                        }"),
                        'plugins' => [
                            "advlist autolink lists link charmap print preview anchor",
                            "searchreplace visualblocks code fullscreen",
                            "insertdatetime media table contextmenu paste image"
                        ],                        
                        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | table code"
                    ] 
                ]);
            ?>

            <?= $form->field($model, 'description')->widget(TinyMce::className(), [ 
                    'options' => ['rows' => 6], 
                    // 'language' => 'id', 
                    'clientOptions' => [ 
                        'branding' => false,
                        'menubar' => false,
                        'file_browser_callback' => new yii\web\JsExpression("function(field_name, url, type, win) {
                            window.open('".yii\helpers\Url::to(['/imagemanager/manager', 'view-mode'=>'iframe', 'select-type'=>'tinymce'])."&tag_name='+field_name,'','width=800,height=540 ,toolbar=no,status=no,menubar=no,scrollbars=no,resizable=no');
                        }"),
                        'plugins' => [
                            "advlist autolink lists link charmap print preview anchor",
                            "searchreplace visualblocks code fullscreen",
                            "insertdatetime media table contextmenu paste image"
                        ],                        
                        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | table code"
                    ] 
                ]);
            ?>

            <?= $form->field($model, 'tag')->textInput(['data-role' => 'tagsinput', 'value' => 'AKGC, AKA Geosains, Mining Consulting', 'placeholder' => 'Tambah tag']) ?>

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
