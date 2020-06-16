<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Slider */

$this->title = 'Perbarui Slider: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Slider', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="slider-update">
    <div class="card-box">   
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
