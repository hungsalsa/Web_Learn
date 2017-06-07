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
    public $css = [
        'common/css/bootstrap.min.css',
        'common/css/main.css',
        "common/css/blue.css",
        "common/css/owl.carousel.css",
        "common/css/owl.transitions.css",
        "common/css/animate.min.css",
        "common/css/rateit.css",
        "common/css/bootstrap-select.min.css",
        "common/css/font-awesome.css",
        "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700",
        "https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800",
        "https://fonts.googleapis.com/css?family=Montserrat:400,700",
    ];
    public $js = [
        "common/js/jquery-1.11.1.min.js",   
        "common/js/bootstrap.min.js",   
        "common/js/bootstrap-hover-dropdown.min.js",
        "common/js/owl.carousel.min.js",    
        "common/js/echo.min.js",
        "common/js/jquery.easing-1.3.min.js",
        "common/js/bootstrap-slider.min.js",
        "common/js/jquery.rateit.min.js",
        "common/js/lightbox.min.js",
        "common/js/bootstrap-select.min.js",
        "common/js/wow.min.js",
        "common/js/scripts.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
