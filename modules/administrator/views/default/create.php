<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\CompanyInfo */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'CompanyInfo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-info-create">
    <div class="card-box"> 
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
