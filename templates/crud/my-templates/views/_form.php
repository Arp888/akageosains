<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">    
    <div class="d-flex justify-content-end mb-4">            
        <div class="ml-auto">
            <?= "<?= " ?>Html::a(<?= "'<span class=\"glyphicon glyphicon-th-list\"></span> Index'" ?>, ['index'], ['class' => 'btn btn-info waves-effect waves-light']) ?>       
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">           

            <?= "<?php " ?>$form = ActiveForm::begin(); ?>

<?php foreach ($generator->getColumnNames() as $attribute) {
    if (in_array($attribute, $safeAttributes)) {
        echo "            <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
    }
} ?>
            <div class="form-group pt-3">
                <div class="btn-group" role="group">
                    <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Simpan') ?>, ['class' => 'btn btn-success waves-effect waves-light']) ?>
                    <?= "<?= " ?>Html::a('Batal', Yii::$app->request->referrer, ['class' => 'btn btn-secondary waves-effect waves-light']) ?>
                </div>
            </div>

            <?= "<?php " ?>ActiveForm::end(); ?>

        </div>
    </div>
</div>
