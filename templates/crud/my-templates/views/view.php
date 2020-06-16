<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = 'Rincian <?= StringHelper::basename($generator->modelClass) ?>';
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(StringHelper::basename($generator->modelClass)) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">
    <div class="card-box">       
        <div class="d-flex justify-content-end mb-3">   
            <?= "<?= " ?>Html::a(<?= "'<span class=\"glyphicon glyphicon-th-list\"></span> Index'" ?>, ['index'], ['class' => 'btn btn-info btn-custom w-md waves-effect waves-light mr-1']) ?>
            <div class="btn-group" role="group">
                <?= "<?= " ?>Html::a(<?= "'<span class=\"glyphicon glyphicon-pencil\"></span> Perbarui'" ?>, ['update', <?= $urlParams ?>], ['class' => 'btn btn-primary btn-custom w-md waves-effect waves-light']) ?>
                <?= "<?= " ?>Html::a(<?= "'<span class=\"glyphicon glyphicon-trash\"></span> Hapus'" ?>, ['delete', <?= $urlParams ?>], [
                    'class' => 'btn btn-danger btn-custom w-md waves-effect waves-light',
                    'data' => [
                        'confirm' => <?= $generator->generateString('Anda yakin ingin menghapus item ini?') ?>,
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
           
        <?= "<?= " ?>DetailView::widget([
            'model' => $model,
            'options' => ['class' => 'table'],
            'template' => '<tr class="d-flex"><th class="col-lg-3 col-md-3 bg-light">{label}</th><td class="col-lg-9 col-md-9">{value}</td></tr>',
            'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
foreach ($generator->getColumnNames() as $name) {
    echo "                '" . $name . "',\n";
}
} else {
foreach ($generator->getTableSchema()->columns as $column) {
    $format = $generator->generateColumnFormat($column);
    echo "                '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
}
}
?>
            ],
        ]) ?>
    </div>
</div>
