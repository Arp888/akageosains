<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use mdm\admin\components\Helper;
use yii\widgets\Breadcrumbs;
use app\assets\AdminPageAsset;
use yii\web\View;
use yii\helpers\Url;

AdminPageAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<main>   
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary g-py-0">
            <div class="container">
                <!-- Responsive Toggle Button -->
                <a class="navbar-brand" href="#">Administrator Area</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            
             
                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="navBar">
                    <?php 
                        $menuItems = [                                
                            ['label' => 'Home <span class="sr-only">(current)</span>', 'url' => ['/administrator'], 'template' => '<a href="{url}" class="nav-link">{label}</a>', 'options' => ['class' => 'nav-item'], 'active' => $this->context->route == '/administrator' ],
                            ['label' => 'Experts', 'url' => ['/administrator/team-expert'], 'template' => '<a href="{url}" class="nav-link">{label}</a>', 'options' => ['class' => 'nav-item'], 'active' => $this->context->route == '/administrator/team-expert'],
                            ['label' => 'Our Expert', 'url' => ['site/expert'], 'template' => '<a href="{url}" class="nav-link">{label}</a>', 'options' => ['class' => 'nav-item'], 'active' => $this->context->route == 'site/expert'],                                
                        ];
                                    
                        echo Menu::widget([
                            'options' => ['class' => 'navbar-nav mt-2 mt-lg-0 ml-auto'],
                            'items' => $menuItems,                        
                            'encodeLabels' => false,
                            'activateItems' => true,
                            'activeCssClass' => 'active',                                
                        ]);       
                    ?>                        
                </div>
                <!-- End Navigation -->

                
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="hidden-xs">
            <?= Breadcrumbs::widget([
                'homeLink' => ['label' => '<i class="material-icons">home</i> Home', 'encode' => false, 'url' => Url::to(['/administrator'])],
                'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n",
                'activeItemTemplate' => "<li class='breadcrumb-item active'>{link}</li>\n",
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>

        <?= $content ?>
    </div>
    
</div>
<footer class="footer navbar-fixed-bottom">
    <div class="container">
        <p class="pull-left">&copy; AKA Geosains <?= date('Y') ?></p>
    </div>
</footer>

</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
