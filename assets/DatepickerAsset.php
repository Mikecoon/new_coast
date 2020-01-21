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
class DatepickerAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web/vendors/datepicker';
    public $css = [
        'datepicker.css',
    ];
    public $js = [
        'datepicker.min.js',
        'locale.js',
    ];
    public $depends = [
        '\yii\web\JqueryAsset',
    ];

}
