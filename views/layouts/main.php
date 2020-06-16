<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use app\modules\administrator\models\CompanyInfo;

AppAsset::register($this);

$company_info = CompanyInfo::find()->asArray()->limit(1)->all();
$info = $company_info[0];
$logo_dark = ($info['logo_dark'] != null ? \Yii::$app->imagemanager->getImagePath($info['logo_dark'], 190, 50, 'inset') : \Yii::getAlias('@web/img/logo-akgc-dark.png'));
$logo_light = ($info['logo_light'] != null ? \Yii::$app->imagemanager->getImagePath($info['logo_light'], 190, 50, 'inset') : \Yii::getAlias('@web/img/logo-akgc-light.png'));
$overview = ($info['overview'] != null ? $info['overview'] : 'AKA Geosains Consulting is an Indonesian-based geological and mining consultant. We have expertise and are experienced across all commodities and mining methods. We provide advisory consulting and professional development solutions to the mining industry.');
$address = ($info['address'] != null ? $info['address'] : 'Ruko Golden Madrid 2 Blok H No 23 BSD City Serpong<br>Jl. Letnan Sutopo No. 2, Lengkong Gudang Timur,<br>Kota Tangerang Selatan, Banten 15311');
$phone = ($info['phone'] != null ? $info['phone'] : '+6221-5056-0068');
$email = ($info['email'] != null ? $info['email'] : 'info@akgc.co.id');
$facebook_link = ($info['facebook_link'] != null ? $info['facebook_link'] : '#');
$twitter_link = ($info['twitter_link'] != null ? $info['twitter_link'] : '#');
$instagram_link = ($info['instagram_link'] != null ? $info['instagram_link'] : '#');
$youtube_link = ($info['youtube_link'] != null ? $info['youtube_link'] : '#');


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
</head>
<body id="home-section" class="g-overflow-hidden">

<?php $this->beginBody() ?>

<main>
    <!-- Header -->
    <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance u-header--change-logo" data-header-fix-moment="100" data-header-fix-effect="slide">
        <div class="u-header__section g-bg-black-opacity-0_5 g-transition-0_3 g-py-7 g-py-23--md"
             data-header-fix-moment-exclude="g-bg-black-opacity-0_5 g-py-23--md"
             data-header-fix-moment-classes="u-shadow-v19 g-bg-white g-py-15--md">
            <nav class="navbar navbar-expand-lg g-py-0">
                <div class="container">
                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-15 g-right-0" type="button"
                          aria-label="Toggle navigation"
                          aria-expanded="false"
                          aria-controls="navBar"
                          data-toggle="collapse"
                          data-target="#navBar">
                        <span class="hamburger hamburger--slider">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Logo -->
                    <a href="index.php" class="navbar-brand u-header__logo">
                        <img class="u-header__logo-img u-header__logo-img--main g-width-90" src=<?= $logo_light ?> alt="AKA Geosains">
                        <img class="u-header__logo-img g-width-90" src=<?= $logo_dark ?> alt="AKA Geosains">
                    </a>
                    <!-- End Logo -->                    

                    <!-- Navigation -->
                    <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                        <?php 
                        $menuItems = [                                
                            ['label' => 'Home', 'url' => ['/'], 'template' => '<a href="{url}" class="nav-link p-0">{label}</a>', 'options' => ['class' => 'nav-item g-mx-15--lg g-mb-7 g-mb-0--lg'], 'active' => $this->context->route == 'site/index' ],
                            ['label' => 'About Us', 'url' => ['site/about'], 'template' => '<a href="{url}" class="nav-link p-0">{label}</a>', 'options' => ['class' => 'nav-item g-mx-15--lg g-mb-7 g-mb-0--lg'], 'active' => $this->context->route == 'site/about'],
                            ['label' => 'Our Expert', 'url' => ['site/expert'], 'template' => '<a href="{url}" class="nav-link p-0">{label}</a>', 'options' => ['class' => 'nav-item g-mx-15--lg g-mb-7 g-mb-0--lg'], 'active' => $this->context->route == 'site/expert'],
                            ['label' => 'Services', 'url' => ['site/services'], 'template' => '<a href="{url}" class="nav-link p-0">{label}</a>', 'options' => ['class' => 'nav-item g-mx-15--lg g-mb-7 g-mb-0--lg'], 'active' => $this->context->route == 'site/services'],
                            ['label' => 'Project', 'url' => ['site/project'], 'template' => '<a href="{url}" class="nav-link p-0">{label}</a>', 'options' => ['class' => 'nav-item g-mx-15--lg g-mb-7 g-mb-0--lg'], 'active' => $this->context->route == 'site/project'],
                            ['label' => 'Contact', 'url' => ['site/contact'], 'template' => '<a href="{url}" class="nav-link p-0">{label}</a>', 'options' => ['class' => 'nav-item g-mx-15--lg g-mb-7 g-mb-0--lg'], 'active' => $this->context->route == 'site/contact'],
                        ];
                                    
                        echo Menu::widget([
                            'options' => ['class' => 'navbar-nav text-uppercase g-letter-spacing-1 g-font-size-12 g-pt-20 g-pt-0--lg ml-auto', 'id' => 'js-scroll-nav'],
                            'items' => $menuItems,                        
                            // 'encodeLabels' => false,
                            // 'activateItems' => true,
                            // 'activeCssClass' => 'active',                                
                        ]);       
                        ?>                        
                    </div>
                    <!-- End Navigation -->                    
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <?= $content ?>
      
    <footer id="contact-section" class="g-pos-rel">
        <!-- Content -->
        <div class="g-bg-size-cover g-bg-img-hero u-bg-overlay g-bg-black-opacity-0_8--after g-pt-70 g-pb-50">
            <div class="container u-bg-overlay__inner">
                <div class="row">
                    <div class="col-md-5 g-mb-40 g-mb-20--lg">
                        <h3 class="h6 g-color-white text-uppercase g-font-weight-700 g-mb-20">Contact Info</h3>

                        <!-- Icon Block -->
                        <div class="media mb-3">
                            <div class="d-flex">
                                <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                                    <i class="icon-hotel-restaurant-235 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <p class="g-color-white-opacity-0_6 mb-0"><?= $address ?></p>
                            </div>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="media align-items-center mb-3">
                            <div class="d-flex">
                                <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                                    <i class="icon-communication-033 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <p class="g-color-white-opacity-0_6 mb-0"><?= $phone ?></p>
                            </div>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="media align-items-center g-mb-3">
                            <div class="d-flex">
                                <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                                    <i class="icon-communication-062 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <p class="g-color-white-opacity-0_6 mb-0"><?= $email ?></p>
                            </div>
                        </div>
                        <!-- End Icon Block -->               

                    </div>

                    <!-- Footer Content -->
                    <div class="col-lg-4 g-mb-40 g-mb-20--lg">
                        <h2 class="h6 g-color-white text-uppercase g-font-weight-700 g-mb-20">About Us</h2>
                        <div class="g-mb-4">
                            <p class="g-color-white-opacity-0_6"><?= $overview ?></p>                
                        </div>

                    </div>
                    <!-- End Footer Content -->

                    <!-- Footer Content -->
                    <div class="col-lg-3 g-mb-40 g-mb-20--lg">
                        <!-- Social Icons -->
                        <h3 class="h6 g-color-white text-uppercase g-font-weight-700 g-mb-20">Social Network</h3>

                        <ul class="list-inline mb-0">
                            <li class="list-inline-item g-mx-2">
                                <?= Html::a('<i class="fa fa-facebook"></i>', $facebook_link, ['class' => 'u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle', 'target' => 'blank']) ?>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <?= Html::a('<i class="fa fa-twitter"></i>', $twitter_link, ['class' => 'u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle', 'target' => 'blank']) ?>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <?= Html::a('<i class="fa fa-instagram"></i>', $instagram_link, ['class' => 'u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle', 'target' => 'blank']) ?>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <?= Html::a('<i class="fa fa-youtube"></i>', $youtube_link, ['class' => 'u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle', 'target' => 'blank']) ?>
                            </li>
                        </ul>
                        <!-- End Social Icons -->
                    </div>
                    <!-- End Footer Content -->
                </div>
            </div>
        </div>
        <!-- End Content -->

        <!-- Go To Top -->
        <a class="js-go-to text-center g-color-main g-color-primary--hover g-left-50x g-ml-minus-100" href="#"
            data-type="absolute"
            data-position='{
                "bottom": 65
            }'
            data-offset-top="400"
            data-compensation="#js-header"
            data-show-effect="fadeInUp">
            <svg version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="208px" height="50px">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M111.042,0h-0.085C81.962,0.042,50.96,42.999,6,42.999c-6,0-6,0-6,0v1h214v-1v-0.015C169.917,42.349,139.492,0.042,111.042,0z"/>
            </svg>
            <i class="g-font-size-20 g-pos-abs g-bottom-20 g-left-50x g-ml-2 fa fa-angle-double-up"></i>
        </a>
        <!-- End Go To Top -->

        <!-- Copyright -->
        <div class="container text-center g-py-30">
            <p class="g-font-size-13 mb-0">&#169; <?= date('Y') ?> AKA Geosains. All Rights Reserved.</p>
        </div>
        <!-- End Copyright -->
      </footer>
            
  <!-- End Contact -->
</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
