<?php

namespace app\controllers;

use app\models\Articles;
use app\models\Places;
use Yii;
use app\components\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Settings;

class ServicesController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionView() {

        $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('view', [
            'articles' => $articles,
        ]);
    }

    public function actionWedding() {

        $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('wedding', [
            'articles' => $articles,
        ]);
    }

    public function actionBanquet() {

        $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('banquet', [
            'articles' => $articles,
        ]);
    }

    public function actionFamily() {
        $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('family', [
            'articles' => $articles,
        ]);
    }

    public function actionEvents() {

        $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();


        $places = Places::find()
            ->where(['is_events' => 1, 'visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('events', [
            'articles' => $articles,
            'places' => $places,
        ]);
    }


}
