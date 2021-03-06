<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Sales;
use yii\data\ActiveDataProvider;
use app\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\AccessControl;

/**
 * EventsController Реализовывает CRUD для модели Events.
 */
class SalesController extends Controller {
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
                    ['allow' => true, 'roles' => ['admin']],
                ],
            ],
        ];
    }

    /**
     * Отображает все записи модели Events.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Sales::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'title' => Sales::name(["МН", "ИМ"])
        ]);
    }

    /**
     * Показывает одну запись модели Events.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Создает запись запись модели Events.
     * Если создание прошло успешно, будет совершен редирект на страницу просмотра.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Sales();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->runAction("view", ['id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Обновляет существующую запись модели Events.
     * Если обновление прошло успешно, будет совершен редирект на страницу просмотра.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('view', [
                'model' => $model,
            ]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Показывать измеения в модели Events.
     * @param integer $id
     * @return mixed
     */
    public function actionLog($id) {
        return $this->render('log', [
            'model' => $this->findModel($id),
            'log' => $this->findModel($id)->getLog(),
        ]);
    }

    /**
     * Удаляет запись из модели Events.
     * Если удаление прошло успешно, будет совершен редирект на страницу просмотра.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();
        return $this->runAction($this->defaultAction);

    }

    /**
     * Находит запись в модели Events основыаясь на внешнем ключе.
     * Если запись не найдена, выбрасывает ошибку 404.
     * @param integer $id
     * @return Events найденная запись
     * @throws NotFoundHttpException если модель не была найдена
     */
    protected function findModel($id) {
        if (($model = Sales::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Ничего не найдено.');
        }
    }
}
