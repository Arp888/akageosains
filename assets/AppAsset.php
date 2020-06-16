<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // Google Fonts 
        '//fonts.googleapis.com/css?family=PT+Sans%7CMerriweather%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik',

        // CSS Global Compulsory 
        // 'themes/general-assets/vendor/bootstrap/bootstrap.min.css',
        'themes/consulting/general-assets/vendor/icon-awesome/css/font-awesome.min.css',
        'themes/consulting/general-assets/vendor/icon-line-pro/style.css',
        'themes/consulting/general-assets/vendor/bootstrap/offcanvas.css',
        'themes/consulting/general-assets/vendor/icon-line/css/simple-line-icons.css',
      

        // CSS Implementing Plugins 
        'themes/consulting/general-assets/vendor/icon-hs/style.css',
        'themes/consulting/general-assets/vendor/hamburgers/hamburgers.min.css',
        'themes/consulting/general-assets/vendor/dzsparallaxer/dzsparallaxer.css',
        'themes/consulting/general-assets/vendor/dzsparallaxer/dzsscroller/scroller.css',
        'themes/consulting/general-assets/vendor/dzsparallaxer/advancedscroller/plugin.css',
        'themes/consulting/general-assets/vendor/animate.css',
        'themes/consulting/general-assets/vendor/slick-carousel/slick/slick.css',
        'themes/consulting/general-assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css',
        'themes/consulting/general-assets/vendor/fancybox/jquery.fancybox.css',

        // CSS Template 
        'themes/consulting/assets/css/styles.op-consulting.css',
        'themes/consulting/general-assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css',

        // Revolution Slider 
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/css/settings.css',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/css/layers.css',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/css/navigation.css',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution-addons/typewriter/css/typewriter.css',

        // CSS Customization 
        'themes/consulting/general-assets/css/custom.css',
        'css/style.css',

    ];
    public $js = [        
        // JS Global Compulsory -->
        'themes/consulting/general-assets/vendor/jquery/jquery.min.js',
        'themes/consulting/general-assets/vendor/jquery-migrate/jquery-migrate.min.js',
        'themes/consulting/general-assets/vendor/jquery.easing/js/jquery.easing.js',
        'themes/consulting/general-assets/vendor/popper.min.js',
        'themes/consulting/general-assets/vendor/bootstrap/bootstrap.min.js',
        'themes/consulting/general-assets/vendor/bootstrap/offcanvas.js',

        // JS Implementing Plugins -->
        'themes/consulting/general-assets/vendor/appear.js',
        'themes/consulting/general-assets/vendor/slick-carousel/slick/slick.js',
        'themes/consulting/general-assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js',
        'themes/consulting/general-assets/vendor/dzsparallaxer/dzsparallaxer.js',
        'themes/consulting/general-assets/vendor/dzsparallaxer/dzsscroller/scroller.js',
        'themes/consulting/general-assets/vendor/dzsparallaxer/advancedscroller/plugin.js',
        'themes/consulting/general-assets/vendor/fancybox/jquery.fancybox.js',
        // 'themes/consulting/general-assets/vendor/jquery.easypin/dist/jquery.easypin.min.js',
        'themes/consulting/general-assets/vendor/jquery-ui/jquery-ui.core.min.js', 
        'themes/consulting/general-assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js',
        'themes/consulting/general-assets/vendor/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js',
        'themes/consulting/general-assets/vendor/jvectormap/tests/assets/jquery-jvectormap-asia-mill.js',
        'themes/consulting/general-assets/vendor/jvectormap/lib/jquery-mousewheel.js',                      

        // JS Unify -->
        'themes/consulting/general-assets/js/hs.core.js',
        'themes/consulting/general-assets/js/components/hs.header.js',
        'themes/consulting/general-assets/js/helpers/hs.hamburgers.js',
        'themes/consulting/general-assets/js/components/hs.scroll-nav.js',
        'themes/consulting/general-assets/js/components/hs.counter.js',
        'themes/consulting/general-assets/js/components/hs.carousel.js',
        'themes/consulting/general-assets/js/components/hs.dropdown.js',
        'themes/consulting/general-assets/js/components/hs.cubeportfolio.js',
        'themes/consulting/general-assets/js/components/hs.popup.js',
        'themes/consulting/general-assets/js/components/hs.go-to.js',
        'themes/consulting/general-assets/js/components/hs.map.pin.js',
        'themes/consulting/general-assets/js/components/hs.map.svg.js',
       
        
        // JS Revolution Slider -->
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'themes/consulting/general-assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js',

        // JS Customization -->
        'themes/consulting/general-assets/js/custom.js',
        'js/init.js',        
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
