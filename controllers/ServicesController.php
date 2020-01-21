<?php

namespace app\controllers;

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
        return $this->render('view');
    }

    public function actionWedding() {
        return $this->render('wedding');
    }

    public function actionBanquet() {
        return $this->render('banquet');
    }

    public function actionFamily() {
        return $this->render('family');
    }

    public function actionEvents() {
        return $this->render('events');
    }


}
