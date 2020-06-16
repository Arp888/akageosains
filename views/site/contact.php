<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Promo Block -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_6--after" style="height: 120%; background-image: url(img/GOLD-GEM-MINING.jpg);"></div>
    <!-- End Parallax Image -->

    <!-- Promo Block Content -->
    <div class="container g-color-white text-center g-pt-150 g-pb-20">
        <h4 class="h4 g-font-weight-300 mb-0 g-color-white">you came to the right place</h4>
        <h2 class="g-font-weight-700 g-font-size-60 text-uppercase g-color-white">Let's Talk</h2>
    </div>
    <!-- Promo Block Content -->
</section>
<!-- End Promo Block -->

<section class="container">
    <!-- Icon Blocks -->
    <div class="row no-gutters u-shadow-v21 g-mt-minus-20">
        <div class="col-sm-4 col-md-4 g-hidden-xs-down g-brd-right--md g-brd-gray-light-v4">
            <!-- Icon Blocks -->
            <div class="g-bg-white text-center g-py-100">
                <span class="u-icon-v1 u-icon-size--xl g-color-primary mb-3">
                    <i class="icon-electronics-005 u-line-icon-pro"></i>
                </span>
                <h4 class="h5 g-font-weight-600 g-mb-5">Phone Number</h4>
                <span class="d-block"><?= $info['phone'] ?></span>
            </div>
            <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-4 col-md-4 g-brd-right--md g-brd-gray-light-v4">
            <!-- Icon Blocks -->
            <div class="g-bg-white text-center g-py-100">
                <span class="u-icon-v1 u-icon-size--xl g-color-primary mb-3">
                    <i class="icon-real-estate-027 u-line-icon-pro"></i>
                </span>
                <h4 class="h5 g-font-weight-600 g-mb-5">Address</h4>
                <span class="d-block g-mr-15 g-ml-15"><?= $info['address'] ?></span>

            </div>
            <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-4 col-md-4 g-hidden-xs-down">
            <!-- Icon Blocks -->
            <div class="g-bg-white text-center g-py-100">
                <span class="u-icon-v1 u-icon-size--xl g-color-primary mb-3">
                    <i class="icon-communication-062 u-line-icon-pro"></i>
                </span>
                <h4 class="h5 g-font-weight-600 g-mb-5">Email</h4>
                <span class="d-block"><?= $info['email'] ?></span>
            </div>
            <!-- End Icon Blocks -->
        </div>
    </div>
    <!-- End Icon Blocks -->

    <!-- Contact Form -->
   
    <!-- End Contact Form -->
</section>