<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\file\FileInput;

$this->title = 'Perbarui Profil Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'Profil Pengguna', 'url' => ['user-profile', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class='user-update'>	
    <div class="card-box">
        <div class="d-flex justify-content-end mb-3">
            <?= Html::a('<span class="glyphicon glyphicon-th-list"></span> Kembali ke Profil', ['user-profile', 'id' => $model->id], ['class' => 'btn btn-info waves-effect waves-light']) ?>       
        </div>

    	<div class='row'>
    		<div class="col-md-10 offset-md-1">

                <?php $form = ActiveForm::begin([
                    'id' => 'form-change',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'options' => ['class' => 'form-group row'],
                        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                        'horizontalCssClasses' => [
                            'label' => 'col-sm-3 col-md-2 col-form-label',
                            'offset' => 'col-sm-3 col-md-2',
                            'wrapper' => 'col-sm-9',
                            'error' => '',
                            'hint' => '',
                        ],
                    ],
                ]); ?>

               
                <?= $form->field($model, 'username')->textInput() ?>
    
                <?= $form->field($model, 'email')->textInput() ?>
        
                <?= $form->field($model, 'fullname')->textInput() ?>
          
                <?php echo $form->field($model, 'fileImage')->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*'],
                        'pluginOptions'=> [
                            'initialPreview'=> [
                                $model->avatar ? Html::img(Yii::getAlias('@web/img/') . $model->avatar, ['class' => 'file-preview-image', 'style' => 'width:auto;height:auto;max-width:100%;max-height:100%;']) : null,
                            ],
                            'initialCaption'=> $model->avatar ? $model->avatar : 'Pilih file...',
                            'overwriteInitial' => true,
                            'showUpload' => false,
                            'showRemove' => false,
                            'allowedFileExtensions' => ['jpg','gif','png'],
                            'maxFileSize' => 1024,
                        ],
                    ]);
                ?>
                        			
    			<div class="form-group row mb-3">
                    <div class="col-sm-10 offset-md-2 offset-sm-3">
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