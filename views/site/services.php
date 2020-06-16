<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Promo Block -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_6--after" style="height: 120%; background-image: url(img/pb-services.jpg);"></div>
    <!-- End Parallax Image -->

    <!-- Promo Block Content -->
    <div class="container g-color-white text-center g-pt-150 g-pb-20">
        <h4 class="h4 g-font-weight-300 mb-0 g-color-white">most quality solution for you</h4>
        <h2 class="g-font-weight-700 g-font-size-60 text-uppercase g-color-white">Our Services</h2>
    </div>
    <!-- Promo Block Content -->
</section>
<!-- End Promo Block -->

<section class="container g-pt-60 g-pb-40">
    <?php if (!empty($services) || $services != []): ?>
    <?php foreach ($services as $key => $service): ?>    
    <!-- Article -->
    <article class="row mx-0 g-mb-20">
        <div class="col-md-6 g-bg-size-cover g-min-height-250" data-bg-img-src=<?= \Yii::$app->imagemanager->getImagePath($service['image'], 555, 305, 'outbound') ?> style="background-image: url(<?= \Yii::$app->imagemanager->getImagePath($service['image'], 555, 305, 'outbound') ?>);"></div>
        <div class="col-md-6 g-bg-secondary g-pa-40">   
            <!-- Article Title -->
            <h3 class="h3 g-mb-20">
                <?= Html::a($service['name'], ['service-detail', 'id' => $service['slug']], ['class' => 'g-color-main g-color-primary--hover g-text-underline--none--hover']) ?>
            </h3>
            <!-- End Article Title -->
            <?= $service['overview'] ?>
            <!-- Article Footer -->
            <footer class="d-flex justify-content-between g-mt-25">      
                <div class="align-self-center">
                <?= Html::a('Learn More', ['service-detail', 'id' => $service['slug']], ['class' => 'btn btn-md u-btn-primary g-font-weight-600 g-font-size-default text-uppercase']) ?>            
                </div>
            </footer>
            <!-- End Article Footer -->
        </div>
    </article>
    <!-- End Article -->
    <?php endforeach; ?>
    <?php endif; ?>
</section>