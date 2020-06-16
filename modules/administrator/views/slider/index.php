<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\administrator\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slider';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="slider-index" id="slider-container">
    <div class="card-box">     
        <div class="row align-items-center mb-3">            
            <div class="col-md-9 order-2 order-md-1">
                <?php echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
            <div class="col-md-3 order-1 order-md-2 text-right">     
                <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Tambah Data', ['create'], ['class' => 'btn btn-primary btn-custom w-md waves-effect waves-light']) ?>
            </div>         
        </div>
        
        <?php Pjax::begin() ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,       
            'striped' => true,
            'hover' => false,
            'bordered' => false,
            'responsiveWrap' => false,
            'perfectScrollbar' => false,
            'emptyText' => 'Belum ada data',
            'krajeeDialogSettings' => ['useNative' => true, 'overrideYiiConfirm' => false],
            'summary' => 'Menampilkan <strong>{begin}-{end}</strong> dari <strong>{totalCount}</strong> item.',
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
            'columns' => [
                [
                    'class' => 'kartik\grid\SerialColumn',
                ],                

                // 'id',
                // 'image',
                [
                    'attribute' => 'image',
                    'format' => 'raw',
                    'vAlign' => 'middle', 
                    'value' => function($model) {
                        return Html::img(\Yii::$app->imagemanager->getImagePath($model->image, 200, 113, 'inset'), ['class' => 'img-fluid']);
                    }
                ],
                [
                    'attribute' => 'title',
                    'format' => 'raw',
                    'vAlign' => 'middle',
                ],
                [
                    'attribute' => 'subtitle',
                    'vAlign' => 'middle',
                ],
                [
                    'attribute' => 'publish',
                    'vAlign' => 'middle',
                    'value' => function($model) {
                        $data = $model::arrStatus();
                        return $data[$model->publish];
                    }
                ],

                // [
                //     'class'=>'kartik\grid\EditableColumn',
                //     'attribute'=>'publish',

                //     'editableOptions'=>[
                //         // 'asPopover' => false,
                //         'header'=>'Publish',
                //         'inputType'=>\kartik\editable\Editable::INPUT_DROPDOWN_LIST,
                //     ],
                //     'vAlign'=>'middle',
                // ],
                [
                    'class' => \arogachev\sortable\grid\SortableColumn::className(),
                    'headerOptions' => ['style' => 'text-align:center; vertical-align:middle;'],
                    // 'contentOptions' => ['class' => 'sortable-cell align-middle'],
                    'gridContainerId' => 'slider-container',
                    'baseUrl' => \yii\helpers\Url::to(['/administrator/sort']) . '/',
                    'confirmMove' => true, // Optional, defaults to true
                    'template' => '<div class="sortable-section align-middle">{moveWithDragAndDrop}</div>',
                    // 'buttons' => [
                    //     'moveWithDragAndDrop' => function () {
                    //         return Html::tag('span', '', [
                    //             'class' => 'fa fa-arrows-alt ui-sortable-handle',
                    //             'title' => Yii::t('sortable', 'Move'),
                    //         ]);
                    //     },                        
                    // ],
                    
                ],                
                // 'created_at',
                // 'created_by',
                // 'updated_at',
                // 'updated_by',

                [
                    'class' => 'kartik\grid\ActionColumn',
                    'header' => false,
                    'vAlign' => 'middle', 
                    'width' => '90px', 
                    'template' => '{view}{update}{delete}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url,
                            [
                                'title' => 'View',
                                'aria-label' => 'View',
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                            ]);
                        },
                        'update' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-pencil mx-1"></span>', $url,
                            [
                                'title' => 'Perbarui',
                                'aria-label' => 'Perbarui',
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                            ]);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url,
                            [
                                'title' => 'Hapus',
                                'aria-label' => 'Hapus',
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                                'data' => [
                                    'confirm' => 'Anda yakin ingin menghapus item ini?',
                                    'method' => 'post'
                                ]
                            ]);
                        },
                    ],
                ],
            ],
        ]); ?>

        <?php Pjax::end() ?>
        
    </div>                                

</div>
