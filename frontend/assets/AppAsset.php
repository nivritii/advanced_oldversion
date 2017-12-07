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
    ];
    public $js = [
        'js/jquery.js',
        'js/jquery-migrate-1.1.1.js',
        'js/jquery.easing.1.3.js',
        'js/script.js',
        'js/superfish.js',
        'js/jquery.equalheights.js',
        'js/jquery.mobilemenu.js',
        'js/tmStickUp.js',
        'js/jquery.ui.totop.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
