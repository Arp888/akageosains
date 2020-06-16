<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "kartik\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>;
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
    <div class="card-box">     
        <div class="d-flex justify-content-end mb-3">            
            <div class="ml-auto">     
                <?= "<?= " ?>Html::a(<?= "'<span class=\"glyphicon glyphicon-plus\"></span> Tambah Data'" ?>, ['create'], ['class' => 'btn btn-primary btn-custom w-md waves-effect waves-light']) ?>
            </div>         
        </div>     

<?php if(!empty($generator->searchModelClass)): ?>
<?= "        <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>

<?= $generator->enablePjax ? '        <?php Pjax::begin(); ?>' : '' ?>
<?php if ($generator->indexWidgetType === 'grid'): ?>
<?= "        <?= " ?>GridView::widget([
            'dataProvider' => $dataProvider,
            <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel," : null ?>                                                            
            'striped' => true,
            'hover' => false,
            'bordered' => false,
            'responsiveWrap' => false,
            'perfectScrollbar' => false,
            'emptyText' => 'Belum ada data',
            'krajeeDialogSettings' => ['overrideYiiConfirm' => false],
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

<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if (++$count < 6) {
            echo "                '" . $name . "',\n";
        } else {
            echo "                // '" . $name . "',\n";
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if (++$count < 6) {
            echo "                '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        } else {
            echo "                // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>

                [
                    'class' => 'kartik\grid\ActionColumn',
                    'header' => false,
                    'vAlign' => 'middle', 
                    'width' => '90px', 
                    'template' => '{view}{update}{delete}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a(<?= "'<span class=\"glyphicon glyphicon-eye-open\"></span>'" ?>, $url,
                            [
                                'title' => 'View',
                                'aria-label' => 'View',
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                            ]);
                        },
                        'update' => function ($url, $model) {
                            return Html::a(<?= "'<span class=\"glyphicon glyphicon-pencil mx-1\"></span>'" ?>, $url,
                            [
                                'title' => 'Perbarui',
                                'aria-label' => 'Perbarui',
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                            ]);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a(<?= "'<span class=\"glyphicon glyphicon-trash\"></span>'" ?>, $url,
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
        
<?php else: ?>
            <?= "<?= " ?>ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {
                    return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
                },
            ]) ?>
<?php endif; ?>
        <?= $generator->enablePjax ? '<?php Pjax::end(); ?>' : '' ?>                          
    </div>
</div>
