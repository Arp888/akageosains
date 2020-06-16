<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Our Expert';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Promo Block -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_6--after" style="height: 120%; background-image: url(img/pb-expert.jpg);"></div>
    <!-- End Parallax Image -->

    <!-- Promo Block Content -->
    <div class="container g-color-white text-center g-pt-150 g-pb-20">
        <h4 class="h4 g-font-weight-300 mb-0 g-color-white">Ready to help you</h4>
        <h2 class="g-font-weight-700 g-font-size-60 text-uppercase g-color-white">Our Expert</h2>
    </div>

    <!-- Promo Block Content -->
</section>
<!-- End Promo Block -->


<section class="container g-pt-100 g-pb-70">
    <?php if (!empty($experts) || $experts != []): ?>
    <?php foreach ($experts as $key => $expert): ?>

    <figure class="row">
        <!-- Figure Image -->
        <div class="col-md-8 col-lg-4 g-mb-30">
            <?= Html::img(\Yii::$app->imagemanager->getImagePath($expert['picture'], 300, 300, 'inset'), ['class' => '', 'alt' => $expert['name']]) ?>
        </div>
        <!-- End Figure Image -->

        <!-- Figure Body -->
        <div class="col-lg-8">
            <div class="d-flex justify-content-between g-mb-10">
                <div class="g-mb-20">
                    <h4 class="h5 g-mb-5"><?= $expert['name'] ?></h4>
                    <em class="d-block g-font-style-normal g-font-size-default text-uppercase g-color-primary"><?= $expert['position'] ?></em>
                </div>

                <!-- Figure Social Icons -->
                <ul class="list-inline mb-0 d-md-block d-none">
                    <li class="list-inline-item g-mx-3">
                        <?= Html::a('<i class="fa fa-facebook"></i>', ($expert['facebook_link'] != null ? $expert['facebook_link'] : '#'), ['class' => 'u-icon-v3 u-icon-size--xs g-color-gray-light-v1 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle', 'target' => 'blank']) ?>
                    </li>
                    <li class="list-inline-item g-mx-3">
                        <?= Html::a('<i class="fa fa-twitter"></i>', ($expert['twitter_link'] != null ? $expert['twitter_link'] : '#'), ['class' => 'u-icon-v3 u-icon-size--xs g-color-gray-light-v1 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle', 'target' => 'blank']) ?>
                    </li>
                    <li class="list-inline-item g-mx-3">
                        <?= Html::a('<i class="fa fa-instagram"></i>', ($expert['instagram_link'] != null ? $expert['instagram_link'] : '#'), ['class' => 'u-icon-v3 u-icon-size--xs g-color-gray-light-v1 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle', 'target' => 'blank']) ?>
                    </li>
                    <li class="list-inline-item g-mx-3">
                        <?= Html::a('<i class="fa fa-linkedin"></i>', ($expert['linkedin_link'] != null ? $expert['linkedin_link'] : '#'), ['class' => 'u-icon-v3 u-icon-size--xs g-color-gray-light-v1 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle', 'target' => 'blank']) ?>
                    </li>
                </ul>
                <!-- End Figure Social Icons -->
            </div>

            <!-- Figure Info -->
            <div class="g-mb-50">
                <?= $expert['description'] ?>
            </div>
            <!-- End Info -->

        </div>
        <!-- End Figure Body -->
    </figure>

    <?php endforeach; ?>
    <?php endif; ?>
</section>  