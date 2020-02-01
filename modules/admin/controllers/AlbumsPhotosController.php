<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\AlbumsPhotos;
use yii\data\ActiveDataProvider;
use app\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\AccessControl;

/**
 * PhotosController Реализовывает CRUD для модели Photos.
 */
class AlbumsPhotosController extends Controller {
    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [ 'allow' => true, 'roles' => ['admin'] ],
                ],
            ],
        ];
    }

    public function actionCreate() {
        $model = new AlbumsPhotos();

        if ($model->load(Yii::$app->request->post())) {
            $model->sort = 0;
            $model->save();

            return $this->renderPartial('_photo', [
                'model' => $model,
            ]);
        }
    }


    public function actionDelete($id) {
        $this->findModel($id)->delete();
    }

    protected function findModel($id) {
        if (($model = AlbumsPhotos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Ничего не найдено.');
        }
    }

    public function actionOrder($ids) {

        $ids = array_reverse(json_decode($ids));

        foreach ($ids as $sort => $id) {

            $photo = AlbumsPhotos::findOne($id);
            $photo->sort = $sort;
            $photo->save();

            var_dump($photo->errors);
        }
    }
}
