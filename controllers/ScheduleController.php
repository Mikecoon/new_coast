<?php

namespace app\controllers;

use Yii;
use app\components\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Settings;

class ScheduleController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionView() {
        return $this->render('view');
    }

}
