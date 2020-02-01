<?php


namespace app\components\widgets\ArticlesSliderWidget;

use yii\web\AssetBundle;


class ArticlesSliderAsset extends AssetBundle {
    public $sourcePath = '@app/components/widgets/ArticlesSliderWidget/assets';
    public $css = [
        'style.scss',
    ];

    public $js = [
        'script.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'app\assets\SliderAsset'
    ];
}