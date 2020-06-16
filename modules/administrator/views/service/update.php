<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Service */

$this->title = 'Perbarui Data: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Service', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="service-update">
    <div class="card-box">   
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
