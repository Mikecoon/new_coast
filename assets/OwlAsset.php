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
class OwlAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web/vendors/plugins/owl';
    public $css = [
        'owl.carousel.css',
    ];
    public $js = [
        'owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

}
