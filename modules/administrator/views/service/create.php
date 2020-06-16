<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Service */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Service', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-create">
    <div class="card-box"> 
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
