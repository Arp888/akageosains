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
class AdminPageAsset extends AssetBundle
{
    public $basePath = '@webroot/admin-assets';
    public $baseUrl = '@web/admin-assets';
    // public $sourcePath = '@bower/bootstrap/dist';
    public $css = [        
        // 'css/site.css',
        'plugins/morris/morris.css',
        'css/bootstrap.min.css',
        'css/icons.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/waves.js',
        'js/jquery.slimscroll.js',
        'js/jquery.scrollTo.min.js',

        'plugins/waypoints/lib/jquery.waypoints.min.js',
        'plugins/counterup/jquery.counterup.min.js',

        'plugins/morris/morris.min.js',
        'plugins/raphael/raphael-min.js',

        'pages/jquery.dashboard.js',

        'js/jquery.core.js',
        'js/jquery.app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'macgyer\yii2materializecss\assets\MaterializeAsset',
        // 'macgyer\yii2materializecss\assets\MaterializePluginAsset',
        // 'yii\bootstrap\BootstrapPluginAsset',
        // 'exocet\BootstrapMD\MaterialAsset', // include css and js
        // 'exocet\BootstrapMD\MaterialIconsAsset', // include icons (optional)
        // 'exocet\BootstrapMD\MaterialInitAsset', // add $.material.init(); js (optional)
    ];

    // public function init()
    // {
    //     parent::init();
    //     // resetting BootstrapAsset to not load own css files
    //     \Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [            
    //         'css' => ['css/bootstrap.min.css'],
    //     ];
    //     \Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
    //         'js' => ['js/bootstrap.min.js'],
    //     ];
    // }
}
