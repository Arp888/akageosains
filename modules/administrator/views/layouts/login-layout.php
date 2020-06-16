<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\assets\LoginAsset;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>    
    <?php $this->head() ?>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<?php $this->beginBody() ?>

<div class="page login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-7">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo"><h1>Administrator Panel</h1></div>
                            <p>www.akgc.co.id</p>
                        </div>
                    </div>
                </div>

                <!-- Form Panel    -->
                <div class="col-lg-5 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <?= $content ?>                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
