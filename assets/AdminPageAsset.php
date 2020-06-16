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
    public $css = [        
        // 'plugins/morris/morris.css',
        // 'css/bootstrap.min.css',
        'plugins/switchery/switchery.min.css',
        'plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
        'css/icons.css',
        'css/style.css',
        'css/custom.css',
        'css/fonts.css',
        'css/glyphicons.css',
    ];
    public $js = [
        // 'js/jquery.min.js',
        // 'js/popper.min.js',
        // 'js/bootstrap.min.js',
        'plugins/switchery/switchery.min.js',
        'js/waves.js',
        'js/jquery.slimscroll.js',
        'js/jquery.scrollTo.min.js',
        'plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',

        // 'plugins/waypoints/lib/jquery.waypoints.min.js',
        // 'plugins/counterup/jquery.counterup.min.js',

        // 'plugins/morris/morris.min.js',
        // 'plugins/raphael/raphael-min.js',

        // 'pages/jquery.dashboard.js',

        'js/jquery.core.js',
        'js/jquery.app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
