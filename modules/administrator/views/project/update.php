<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Project */

$this->title = 'Perbarui Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Project', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="project-update">
    <div class="card-box">   
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
