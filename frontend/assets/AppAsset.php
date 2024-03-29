<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    //public $sourcePath = '@bower/stable/';
    public $css = [
        'css/style.css',
        'css/bootstrap.min.css',
        'css/animate.min.css',
        'css/font-awesome.min.css',
        'css/sub-nav.css'
    ];
    public $js = [
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/waypoints.min.js',
        'js/jquery.scrollTo.min.js',
        'js/jquery.localScroll.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/validate.js',
        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
