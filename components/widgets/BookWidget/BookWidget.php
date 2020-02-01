<?php

namespace app\components\widgets\BookWidget;

use app\models\BookSearchForm;
use Yii;
use yii\base\Widget;


class BookWidget extends Widget {

    private $model;

    public function init(){
        BookWidgetAsset::register($this->view);
        parent::init();

        $this->model = new BookSearchForm();

    }

    public function run(){
        return $this->render('main', [
            'model' => $this->model
        ]);
    }

}