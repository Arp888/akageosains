<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Slider */

$this->title = 'Buat Slider';
$this->params['breadcrumbs'][] = ['label' => 'Slider', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-create">
    <div class="card-box"> 
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
