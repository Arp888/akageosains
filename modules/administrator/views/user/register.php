<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\modules\administrator\models\User;

$this->title = 'Register Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['user-index']];
$this->params['breadcrumbs'][] = $this->title;

$user = new User;
$roles = $user->roleValue;
?>

<div class='user-register'>
    <div class="card-box">     
        <div class="d-flex justify-content-end mb-3">
            <?= Html::a('<span class="glyphicon glyphicon-th-list"></span> Index', ['user-index'], ['class' => 'btn btn-info btn-custom w-md waves-effect waves-light']) ?>       
        </div>
       
    	<div class='row'>
    		<div class="col-md-10 offset-md-1">    
               
                <?php $form = ActiveForm::begin([
                    'id' => 'form-signup',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'options' => ['class' => 'form-group row'],
                        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                        'hintOptions' => ['class' => 'font-13 text-muted', 'tag' => 'span'],
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
                
                <?= $form->field($model, 'fullname')->textInput(['placeholder' => 'Nama Lengkap']) ?>
            
                <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username']) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email']) ?>

                <?= $form->field($model, 'password')->textInput(['placeholder' => 'Password']) ?>
 
                <?= $form->field($model, 'role')->dropDownList($roles, ['class' => 'custom-select form-control', 'promt' => 'Pilih Role']) ?>
   
    			<div class="form-group row mb-3">
                    <div class="col-sm-10 offset-md-2 offset-sm-3">
                        <div class="btn-group" role="group">
                            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success btn-custom w-md waves-effect waves-light', 'name' => 'signup-button']) ?>
                            <?= Html::a('Batal', ['user-index'], ['class' => 'btn btn-secondary btn-custom w-md waves-effect waves-light']) ?>
                        </div>
                    </div>
                </div>

    			<?php ActiveForm::end(); ?>
    		</div>
    	</div>	
    </div>	
</div>