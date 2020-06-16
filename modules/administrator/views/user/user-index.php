<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\grid\GridView;
use app\modules\administrator\models\User;

$this->title = 'User Management';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class='user-index'>
    <div class="card-box">     
        <div class="row align-items-center mb-3">            
            <div class="col-md-9 order-2 order-md-1">
                <?php $form = ActiveForm::begin([
                    'action' => ['user-index'],
                    'options' => ['class' => 'form-row align-items-center'],
                    'method' => 'get',
                ]); ?>
                
                <div class="col-sm-3 my-1">
                    <?php echo $form->field($searchModel, 'status', ['options' => ['tag' => false]])->dropDownList([User::STATUS_ACTIVE => 'Active', User::STATUS_DELETED => 'Deleted'], ['class' => 'form-control custom-select mr-sm-2', 'prompt' => 'Semua role'])->label('Status', ['class' => 'sr-only'])->error(false) ?>
                </div>
                <div class="col-sm-3 my-1">
                    <?= $form->field($searchModel, 'role', ['options' => ['tag' => false]])->dropDownList($searchModel->roleValue, ['class' => 'form-control custom-select mr-sm-2', 'prompt' => 'Semua status'])->label('Klien', ['class' => 'sr-only'])->error(false) ?>
                </div>
                <div class="col-sm-3 my-1">
                    <?= Html::submitButton('Filter', ['class' => 'btn btn-warning btn-custom w-md waves-effect waves-light']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-md-3 order-1 order-md-2 text-right">     
                <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Register Pengguna', ['register'], ['class' => 'btn btn-primary btn-custom w-md waves-effect waves-light']) ?>
            </div>         
        </div>

    	<?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel, 
            'responsiveWrap' => false,
            'perfectScrollbar' => false,  
            'striped' => true,
            'bordered' => false,                                         
            'summary' => 'Menampilkan <strong>{begin}-{end}</strong> dari <strong>{totalCount}</strong> data.',
            'pager' => [
                'options' => ['class' => 'pagination pagination-split'],
                'pageCssClass' => 'page-item',
                'linkOptions' => ['class' => 'page-link'],
                'disabledPageCssClass' => 'disabled',
                'prevPageCssClass' => 'prev page-item',
                'nextPageCssClass' => 'next page-item',
                'maxButtonCount' => 5,
                'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
            ],          
            'emptyText' => 'Belum ada data',
            'krajeeDialogSettings' => ['overrideYiiConfirm' => false],
    		'columns' => [
    			['class' => 'kartik\grid\SerialColumn'],
    			'username',
    			'fullname',
    			'email',
    			[
    				'attribute' => 'role',
    				'filter' => $searchModel->roleValue,
                    'filterInputOptions' => ['class' => 'custom-select form-control', 'prompt' => 'Pilih...'],			
    				'value' => function ($model) {					
    					return $model->roleLabel;
    				},
                    'width' => '180px',
    			],
    			[
    				'attribute' => 'status',
                    'format' => 'raw',
    				'filter' => [User::STATUS_ACTIVE => 'Active', User::STATUS_DELETED => 'Deleted'],
                    'filterInputOptions' => ['class' => 'custom-select form-control', 'prompt' => 'Pilih...'],
    				'value' => function ($model) {
    			   	    return ($model->status === $model::STATUS_ACTIVE ? '<span class="badge badge-primary">Active</span>' : '<span class="badge badge-warning">Deleted</span>');
    				},
                    'width' => '150px',
    			],
    			[
    				'class' => 'kartik\grid\ActionColumn',
    				'template' => '{update}',
    				'buttons' => [
    					'update' => function ($url, $model) {
    						return Html::a('<span style="padding:0 3px;" class="glyphicon glyphicon-pencil"></span>', ['user-update', 'id' => $model->id],
    						[
    							'title' => 'Update',
    							'aria-label' => 'Update',
    							'data-placement' => 'top',
    						]);
    					},
    				],
    			],
    		],
    	]);?>
    </div>
</div>