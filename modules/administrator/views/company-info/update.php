<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\CompanyInfo */

$this->title = 'Perbarui Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Company Info', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="company-info-update">
    <div class="card-box">   
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
