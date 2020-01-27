<?php

namespace app\controllers;

use app\models\Articles;
use yii\web\Controller;

class ArticlesController extends Controller {


    public function actionView($id) {

        $model = Articles::find()
            ->where(['id' => $id, 'visible' => 1])
            ->one();

        $articles = Articles::find()
            ->where(['visible' => 1])
            ->andWhere(['<>', 'id', $id])
            ->orderBy('sort desc')
            ->all();

        return $this->render('view', [
            'model' => $model,
            'articles' => $articles
        ]);
    }

}
