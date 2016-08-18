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
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $sourcePath='@app/themes/grey-matter/';
    public $css = [
        //'css/site.css',
//        'css/bootstrap.css',
//        'css/style.css',
//        'http://fonts.googleapis.com/css?family=Slabo+27px',
//        'fonts/css/font-awesome.min.css',
//        'css/owl.carousel.css',
        'files/main_style.css',
        'files/theme/main_style.css',
        'files/theme/css/styles.css',
    ];
    //public $jsOptions = ['position' => \yii\web\View::POS_BEGIN];
    public $js = [
        'files/theme/js/jquery.min.js',
        'files/theme/js/waltzerjs.js',
//        'js/jquery.min.js',
//        'js/nav.js',
//        'js/owl.carousel.js',
//        'js/easyResponsiveTabs.js', 
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
