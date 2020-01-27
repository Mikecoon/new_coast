<?php


namespace app\components\widgets\PhotosSliderWidget;
use yii\web\AssetBundle;


class PhotosSliderWidgetAsset extends AssetBundle {
    public $sourcePath = '@app/components/widgets/PhotosSliderWidget/assets';
    public $css = [
        'style.scss',
    ];

    public $js = [
        'script.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'app\assets\SliderAsset',

    ];
}