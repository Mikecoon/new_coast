<?php

namespace app\controllers;

use app\models\Events;
use yii\web\Controller;

class ScheduleController extends Controller {

    public function actionIndex() {

        $events = Events::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('index', [
            'events' => $events
        ]);
    }

    public function actionView($id) {

        $model = Events::find()
            ->where(['id' => $id])
            ->one();

        return $this->render('view', [
            'model' => $model
        ]);
    }

}
