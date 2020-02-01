<?php

namespace app\components\widgets\PhotosSliderWidget;

use yii\base\Widget;


class PhotosSliderWidget extends Widget {

    public $photos = [];

    public function init(){
        PhotosSliderWidgetAsset::register($this->view);
        parent::init();

    }

    public function run(){
        return $this->render('main', [
            'photos' => $this->photos
        ]);
    }

}