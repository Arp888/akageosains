<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\modules\administrator\models\User;

$this->title = 'Perbarui Status Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['user-index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class='user-update'>	
    <div class="card-box">    
        <div class="d-flex justify-content-end mb-3">
            <?= Html::a('<span class="glyphicon glyphicon-th-list"></span> Index', ['user-index'], ['class' => 'btn btn-info btn-custom w-md waves-effect waves-light']) ?>       
        </div>

        <div class='row'>
    		<div class="col-md-10 offset-md-1">    
                <?php $form = ActiveForm::begin([
                    'id' => 'user-update',
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
                
                <?= $form->field($model, 'status')->dropDownList([User::STATUS_DELETED => 'Deleted', User::STATUS_ACTIVE => 'Active'], ['class' => 'custom-select form-control', 'prompt' => 'Pilih Status']) ?>
           
                <?= $form->field($model, 'role')->dropDownList($model->roleValue, ['class' => 'custom-select form-control', 'promt' => 'Pilih Role']) ?>
                        							
    			<div class="form-group row mb-3">
                    <div class="col-sm-10 offset-md-2 offset-sm-3">
                        <div class="btn-group" role="group">
                            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success btn-custom w-md waves-effect waves-light']) ?>
                            <?= Html::a('Batal', ['user-index'], ['class' => 'btn btn-secondary btn-custom w-md waves-effect waves-light']) ?>
                        </div>
                    </div>
                </div>
    			
                <?php ActiveForm::end(); ?>
    			
    		</div>			
    	</div>
    </div>
</div>