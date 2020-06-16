<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\ErrorAsset;
use yii\web\View;

ErrorAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--=== Error V6 ===-->
    <div class="container valign__middle">
        <!--Error Block-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v6 valign__middle">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div><!--/container-->
    <!--End Error Block-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
