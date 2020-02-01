<?php

namespace app\controllers;

use app\models\Sales;
use yii\web\Controller;

class SalesController extends Controller {

    public function actionIndex() {

        $sales = Sales::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('index', [
            'sales' => $sales
        ]);
    }

    public function actionView($id) {

        $model = Sales::find()
            ->where(['id' => $id])
            ->one();

        return $this->render('view', [
            'model' => $model
        ]);
    }

}
