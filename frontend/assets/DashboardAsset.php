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
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/ionicons.min.css',
        'css/AdminLTE.min.css',
        'css/_all-skins.min.css',
        'css/morris.css',
        'css/jquery-jvectormap.css',
        'css/bootstrap-datepicker.min.css',
        'css/daterangepicker.css',
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
