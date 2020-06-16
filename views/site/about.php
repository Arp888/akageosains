<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About AKA Geosains';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Promo Block -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_6--after" style="height: 120%; background-image: url(img/pb-about.jpg);"></div>
    <!-- End Parallax Image -->
    <!-- Promo Block Content -->
    <div class="container g-color-white text-center g-pt-150 g-pb-20">
        <h4 class="h4 g-font-weight-300 mb-0 g-color-white">Discover more</h4>
        <h2 class="g-font-weight-700 g-font-size-60 text-uppercase g-color-white">About Us</h2>
    </div>
    <!-- Promo Block Content -->
</section>
<!-- End Promo Block -->

<!-- About -->
<div id="about-section">
    <div class="container g-pt-50">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-font-size-13 g-letter-spacing-2 mb-4">Who we are?</h1>
                <div class="d-inline-block g-width-60 g-height-2 g-bg-secondary-light-v1 mb-3"></div>
                <div class="mb-5">
                    <p class="g-mb-30">
                    <?php if (!empty($info['description'])): ?>
                        <?= $info['description'] ?>
                    <?php else: ?>
                        AKA Geosains Consulting is an Indonesian-based geological and mining consultant. We have expertise and are experienced across all commodities and mining methods. We provide advisory consulting and
                        professional development solutions to the mining industry. We are proud of our capabilities in providing the best solution for
                        integrated mining services. Our capabilities are including Exploration Services, Geographical Information System, Geological Data Management, Resource Modeling &
                        Evaluation, Quality Assurance Quality Control Services, Geophysical Surveys, Due Diligence, and International Standard Reporting (JORC, NI 43-101, and KCMI).
                    <?php endif; ?>
                    </p>
                </div>
            </div>

            <div class="col-lg-6 g-mb-50">
                <img class="img-fluid" src="img/akgc-1.jpg" alt="">
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 g-mb-50 order-2 order-lg-1">
                <img class="img-fluid" src="img/akgc-2.jpg" alt="">
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-font-size-13 g-letter-spacing-2 mb-4">Our Mission & Goal</h1>
                <div class="d-inline-block g-width-60 g-height-2 g-bg-secondary-light-v1 mb-3"></div>
                <div class="mb-5">
                    <p>
                    <?php if (!empty($info['mission'])): ?>
                        <?= $info['mission'] ?>
                    <?php else: ?>
                        Our consultants work with you to optimize your human, organization and technology systems.
                    <?php endif; ?>
                    </p>

                    <p>
                    <?php if (!empty($info['goal'])): ?>
                        <?= $info['goal'] ?>
                    <?php else: ?>
                        Our goal is to provide innovative business and scientific solutions that will lead to the discovery of the next generation of economic mineral deposits at lower cost and within shorter time.
                    <?php endif; ?>
                    </p>
                </div>      
            </div>
        </div>
    </div>
</div>
<!-- End About -->
