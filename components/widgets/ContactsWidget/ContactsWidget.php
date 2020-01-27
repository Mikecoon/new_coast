<?php

namespace app\components\widgets\ContactsWidget;

use yii\base\Widget;


class ContactsWidget extends Widget {

    public function init(){
        ContactsWidgetAsset::register($this->view);
        parent::init();

    }

    public function run(){
        return $this->render('main', [
            'email' => \Yii::$app->params['email'],
            'phone' => \Yii::$app->params['phone'],
        ]);
    }

}