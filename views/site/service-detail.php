<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $service->name;
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Promo Block -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_6--after" style="height: 120%; background-image: url(../img/pb-services.jpg);"></div>
    <!-- End Parallax Image -->

    <!-- Promo Block Content -->
    <!-- <div class="container g-color-white text-center g-pt-150 g-pb-20">
        <h4 class="h4 g-font-weight-300 mb-0 g-color-white">service detail</h4>
        <h2 class="g-font-weight-700 g-font-size-60 text-uppercase g-color-white"><?= $service->name ?></h2>
    </div> -->
    <div class="container g-color-white text-center g-pt-150 g-pb-20">
        <h4 class="h4 g-font-weight-300 mb-0 g-color-white">most quality solution for you</h4>
        <h2 class="g-font-weight-700 g-font-size-60 text-uppercase g-color-white">Our Services</h2>
    </div>
    <!-- Promo Block Content -->
</section>
<!-- End Promo Block -->

<section class="container g-pt-60 g-pb-40">
    <article class="row mx-0 g-mb-20">
        <div class="col-md-12 g-bg-size-cover g-min-height-300" data-bg-img-src=<?= \Yii::$app->imagemanager->getImagePath($service['image'], 1920, 1080, 'inset') ?> style="background-image: url(<?= \Yii::$app->imagemanager->getImagePath($service['image'], 1920, 1080, 'inset') ?>);"></div>

        <div class="col-md-12 g-bg-secondary g-pa-40">   
            <div class="u-heading-v2-3--bottom g-mb-30">
                <h1 class="h2 u-heading-v2__title g-mb-10"><?= $service->name ?></h1>
            </div>

            <?= \yii\helpers\HtmlPurifier::process($service->description) ?>

            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-mt-25">      
                <div class="align-self-center">
                    <?= Html::a('Back to Services', ['services'], ['class' => 'btn btn-md u-btn-primary g-font-weight-600 g-font-size-default text-uppercase']) ?>            
                </div>
            </footer>
            <!-- End Article Footer -->
        </div>
    </article>
</section>