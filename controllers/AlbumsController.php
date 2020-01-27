<?php

namespace app\controllers;

use app\models\Albums;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AlbumsController extends Controller {

    public function actionIndex() {

        $albums = Albums::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('index', [
            'albums' => $albums
        ]);
    }

    public function actionView($id) {

        $model = Albums::find()
            ->where(['visible' => 1, 'id' => $id])
            ->orderBy('sort desc')
            ->one();

        if (!$model) throw new NotFoundHttpException();

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}
