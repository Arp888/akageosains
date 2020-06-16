<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\assets\AdminPageAsset;

app\assets\AdminPageAsset::register($this);
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

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">
            <!-- Logo container-->
            <div class="logo">
                <!-- Image Logo -->
                <a href="index.html" class="logo">
                    <?php //echo Html::img('@web/img/logo-akgc.png', ['height' => 24, 'class' => 'logo-lg']) ?>
                    <?= Html::img('@web/img/Logo-AKGC-Admin.png', ['height' => 45, 'class' => 'logo-sm']) ?>
                </a>
            </div>
            <!-- End Logo container-->

            <div class="menu-extras topbar-custom">
                <ul class="list-inline float-right mb-0">
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <?php 
                            $user = \app\modules\administrator\models\UserProfile::findOne(['id' => Yii::$app->user->identity->id]); 
                            echo '<span class="mr-2">' . $user->fullname . '</span>';
                            $avatar = $user->getImageUrl(); 
                            if ($avatar) {
                                echo Html::img($avatar, ['class' => 'rounded-circle', 'style' => 'width:40px; height:40px;']);
                            } else {
                                Html::img('@web/img/default-user.jpg', ['class' => 'rounded-circle', 'style' => 'width:36px; height:36px;']);
                            }
                            ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown" aria-labelledby="Preview">
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small class="text-white">Welcome</small> </h5>
                            </div>
                            <?= Html::a('<i class="mdi mdi-account"></i> <span>Profil Pengguna</span>', ['/administrator/user/user-profile', 'id' => Yii::$app->user->identity->id], ['class' => 'dropdown-item notify-item']) ?>                           
                            <?= Html::a('<i class="mdi mdi-logout"></i> <span>Logout</span>', ['/administrator/user/logout'], ['class' => 'dropdown-item notify-item', 'data-method' => 'post']) ?>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end menu-extras -->
            <div class="clearfix"></div>
        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->                
                <?php 
                    $nav_items = [
                        [
                            'label' => '<i class="ti-dashboard"></i>Company Info', 
                            'options' => ['class' => 'has-submenu'],
                            'url' => ['/administrator/company-info/index'], 
                        ],

                        [
                            'label' => '<i class="ti-desktop"></i>Slider', 
                            'options' => ['class' => 'has-submenu'],
                            'url' => ['/administrator/slider/index'], 
                        ],

                        [
                            'label' => '<i class="ti-star"></i>Expert', 
                            'options' => ['class' => 'has-submenu'],
                            'url' => ['/administrator/expert/index'], 
                        ],

                        [
                            'label' => '<i class="ti-layers-alt"></i>Service', 
                            'options' => ['class' => 'has-submenu'],
                            'url' => ['/administrator/service/index'], 
                        ],

                        [
                            'label' => '<i class="ti-map-alt"></i>Project', 
                            'options' => ['class' => 'has-submenu'],
                            'url' => ['/administrator/project/index'], 
                        ],

                        [
                            'label' => '<i class="ti-user"></i>User Management', 
                            'options' => ['class' => 'has-submenu'],
                            'url' => ['/administrator/user/user-index'], 
                        ],                                
                    ];

                    echo Menu::widget([
                        'items' => $nav_items,
                        'options' => ['class' => 'navigation-menu'],
                        'submenuTemplate' => "<ul class='submenu'>{items}</ul>",
                        'encodeLabels' => false,
                    ]);
                    
                ?>                
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->

<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">                       
                        <?= Breadcrumbs::widget([
                            'options' => ['class' => 'breadcrumb hide-phone p-0 m-0'],
                            'tag' => 'ol',
                            'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n",
                            'activeItemTemplate' => "<li class=\"breadcrumb-item active\">{link}</li>\n",
                            'homeLink' => ['label' => 'Home', 'url' => ['/administrator/']],
                            'encodeLabels' => false,
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </div>
                    <h4 class="page-title"><?= $this->title ?></h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <?= $content ?>
            </div>
        </div>
    </div> <!-- end container -->
</div>
<!-- end wrapper -->

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?= date('Y') ?> © AKA Geosains Consultant
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<?php 
$this->registerJsFile('@web/admin-assets/js/modernizr.min.js', ['depends'=> [], 'position' => \yii\web\View::POS_HEAD]);
$this->registerJs('
    $(function () {
      $("[data-toggle=\'tooltip\']").tooltip()
    })
');
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>