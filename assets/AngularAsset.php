<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace razmik\angular2\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AngularAsset extends AssetBundle
{
   // public $basePath = '@webroot';
    public $baseUrl = '@webroot';
    public $css = [
    ];
    public $js = [
        '/node_modules/zone.js/dist/zone.js',
        '/node_modules/reflect-metadata/Reflect.js',
        '/node_modules/systemjs/dist/system.src.js',
        '/systemjs.config.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
