<?php

namespace app\assets;

use yii\web\AssetBundle;


class FontAwesomeAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web/vendors/plugins/FontAwesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
