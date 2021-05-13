<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "vendors/fontawesome/css/all.min.css",
        "vendor/bootstrap/bootstrap.min.css",
        "vendors/themify-icons/themify-icons.css",
        "vendors/nice-select/nice-select.css",
        "vendors/owl-carousel/owl.theme.default.min.css",
        "vendors/owl-carousel/owl.carousel.min.css",
        "css/bootstrap.css",
        "css/footer.css",
        "css/stud.css",
        "css/side.css",
        "css/style.css"
    ];
    public $js = [
        "vendors/jquery/jquery-3.2.1.min.js",
        "vendors/bootstrap/bootstrap.bundle.min.js",
        "js/skrollr.min.js",
        "vendors/owl-carousel/owl.carousel.min.js",
        "vendors/nice-select/jquery.nice-select.min.js",
        "js/jquery.ajaxchimp.min.js",
        "js/mail-script.js",
        "bootstrap.js",
        "js/main.js"

        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
namespace yii\bootstrap;
use yii\web\AssetBundle;
class BootstrapPluginAsset extends AssetBundle {
     public $sourcePath = '@bower/bootstrap/dist';
     public $js = [ 'js/bootstrap.js', ];
     public $depends = [ 'yii\web\JqueryAsset',
     'yii\bootstrap\BootstrapAsset', ];
}
