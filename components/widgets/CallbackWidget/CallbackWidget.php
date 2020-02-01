<?php

namespace app\components\widgets\CallbackWidget;

use Yii;
use yii\base\Widget;


class CallbackWidget extends Widget{

    public function init(){
        CallbackWidgetAsset::register($this->view);
        parent::init();

    }

    public function run(){
        return $this->render('main');
    }

}