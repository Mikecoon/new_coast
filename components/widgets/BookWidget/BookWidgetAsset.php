<?php


namespace app\components\widgets\BookWidget;

use yii\web\AssetBundle;


class BookWidgetAsset extends AssetBundle {
    public $sourcePath = '@app/components/widgets/BookWidget/assets';
    public $css = [
        'style.scss',
    ];

    public $js = [
        'script.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',

    ];
}