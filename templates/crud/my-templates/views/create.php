<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= $generator->generateString('Tambah Data') ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(StringHelper::basename($generator->modelClass)) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-create">
    <div class="card-box"> 
        <?= "<?= " ?>$this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
