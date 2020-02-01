<?php


namespace app\components\widgets\ContactsWidget;
use yii\web\AssetBundle;


class ContactsWidgetAsset extends AssetBundle {
    public $sourcePath = '@app/components/widgets/ContactsWidget/assets';
    public $css = [
        'style.scss',
    ];

    public $js = [
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}