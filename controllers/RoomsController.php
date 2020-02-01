<?php

namespace app\controllers;

use app\models\Rooms;
use yii\web\Controller;


class RoomsController extends Controller {

    public function actionIndex() {

        $rooms = Rooms::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('index', [
            'rooms' => $rooms
        ]);
    }

    public function actionView($id) {

        $model = Rooms::find()
            ->where(['id' => $id, 'visible' => 1])
            ->one();

        return $this->render('view', [
            'model' => $model
        ]);
    }

}
