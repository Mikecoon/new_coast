<?php

namespace app\components\widgets\ArticlesSliderWidget;

use app\models\BookSearchForm;
use Yii;
use yii\base\Widget;


class ArticlesSliderWidget extends Widget {

    public $title = '';
    public $links = [];

    public function init(){
        ArticlesSliderAsset::register($this->view);
        parent::init();
    }

    public function run(){
        return $this->render('main', [
            'title' => $this->title,
            'links' => $this->links,
        ]);
    }

}