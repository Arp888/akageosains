<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Expert */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Expert', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expert-create">
    <div class="card-box"> 
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
