<?php

namespace app\controllers;

use app\models\Albums;
use app\models\Banners;
use Yii;
use app\components\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Settings;
use szaboolcs\recaptcha\InvisibleRecaptchaValidator;
use yii\web\ForbiddenHttpException;

class SiteController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['admin'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],

        ];
    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',

            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'metrika' => [
                'class' => 'app\components\metrika\MetrikaAction',
                'token' => Settings::get("yandex_token"),
                'counter' => Settings::get("yandex_counter")
            ],
        ];
    }

    public function actionAbout() {

        $albums = Albums::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('about', [
            'albums' => $albums
        ]);
    }

    public function actionContacts() {
        return $this->render('contacts');
    }

    public function actionPricing() {
        return $this->render('pricing');
    }

    public function actionSchedule() {
        return Yii::$app->runAction('schedule/index', []);
    }

    public function actionServices() {
        return Yii::$app->runAction('services/index', []);
    }

    public function actionSales() {
        return Yii::$app->runAction('sales/index', []);
    }

    public function actionIndex() {

        $banners = Banners::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();

        return $this->render('index', [
            'banners' => $banners
        ]);
    }

    public function actionAdmin() {
        return Yii::$app->runAction('admin/default/index', []);
    }

    public function actionRooms() {
        return Yii::$app->runAction('rooms/index', []);
    }

    public function actionAlbums() {
        return Yii::$app->runAction('albums/index', []);
    }

    public function actionTour() {
        return $this->render('tour');
    }

    public function actionMap() {
        return $this->render('map');
    }

    public function actionContactForm() {
        $model = new ContactForm();

        $model->load(Yii::$app->request->post());

        if ($model->validate() && InvisibleRecaptchaValidator::validate(Yii::$app->request->post(InvisibleRecaptchaValidator::POST_ELEMENT))) {
            echo $model->contact(Yii::$app->params['contactEmail']);
        } else {
            throw new ForbiddenHttpException('Captcha error');
        }

    }

}
