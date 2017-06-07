<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/bootstrap/dist/css/bootstrap.min.css',
        'vendors/font-awesome/css/font-awesome.min.css',
        'vendors/nprogress/nprogress.css',
        'vendors/iCheck/skins/flat/green.css',
        // bootrap
        'vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
        'vendors/jqvmap/dist/jqvmap.min.css',
        'vendors/bootstrap-daterangepicker/daterangepicker.css',
        'build/css/custom.min.css',
        'css/jquery-ui.min.css',
        'css/site.css',
    ];
    public $js = [
        // <!-- jQuery -->
        'vendors/jquery/dist/jquery.min.js',
        // <!-- Bootstrap -->
        'vendors/bootstrap/dist/js/bootstrap.min.js',
        // <!-- FastClick -->
        'vendors/fastclick/lib/fastclick.js',
        // <!-- NProgress -->
        'vendors/nprogress/nprogress.js',
        // <!-- Chart.js -->
        'vendors/Chart.js/dist/Chart.min.js',
        // <!-- gauge.js -->
        'vendors/gauge.js/dist/gauge.min.js',
        // <!-- bootstrap-progressbar -->
        'vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
        // <!-- iCheck -->
        'vendors/iCheck/icheck.min.js',
        // <!-- Skycons -->,
        'vendors/skycons/skycons.js',
        // <!-- Flot -->
        'vendors/Flot/jquery.flot.js',
        'vendors/Flot/jquery.flot.pie.js',
        'vendors/Flot/jquery.flot.time.js',
        'vendors/Flot/jquery.flot.stack.js',
        'vendors/Flot/jquery.flot.resize.js',
        // <!-- Flot plugins -->
        'vendors/flot.orderbars/js/jquery.flot.orderBars.js',
        'vendors/flot-spline/js/jquery.flot.spline.min.js',
        'vendors/flot.curvedlines/curvedLines.js',
        // <!-- DateJS -->
        'vendors/DateJS/build/date.js',
        // <!-- JQVMap -->
        'vendors/jqvmap/dist/jquery.vmap.js',
        'vendors/jqvmap/dist/maps/jquery.vmap.world.js',
        'vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
        // <!-- bootstrap-daterangepicker -->
        'vendors/moment/min/moment.min.js',
        'vendors/bootstrap-daterangepicker/daterangepicker.js',
        'js/jquery-ui.min.js',
        'tinymce/tinymce.min.js',
        'js/main.js',
        'js/editor.js',

        // <!-- Custom Theme Scripts -->
        'build/js/custom.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
