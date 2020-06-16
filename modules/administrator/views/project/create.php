<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\Project */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Project', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-create">
    <div class="card-box"> 
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
