<?php


namespace app\components\widgets\CallbackWidget;

use yii\web\AssetBundle;


class CallbackWidgetAsset extends AssetBundle {
    public $sourcePath = '@app/components/widgets/CallbackWidget/assets';
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