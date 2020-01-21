<?php

namespace app\controllers;

use Yii;
use app\components\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Settings;

class EntertainmentController extends Controller {

    public function actionBath() { return $this->render('bath'); }
    public function actionSpa() { return $this->render('spa'); }
    public function actionChildren() { return $this->render('children'); }
    public function actionAnimation() { return $this->render('animation'); }
    public function actionRestaurants() { return $this->render('restaurants'); }
    public function actionSport() { return $this->render('sport'); }
    public function actionBowling() { return $this->render('bowling'); }
    public function actionSolarium() { return $this->render('solarium'); }
    public function actionYachtClub() { return $this->render('yacht-club'); }

}
