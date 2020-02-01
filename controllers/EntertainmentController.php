<?php

namespace app\controllers;

use Yii;
use app\components\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Settings;
<<<<<<< HEAD
use app\models\Articles;

class EntertainmentController extends Controller {

    public function actionBath() {
         
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('bath', [
            'articles' => $articles
        ]); 
        
    }
    public function actionSpa() { 
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('spa', [
            'articles' => $articles
        ]); 
        
        
    }
    public function actionChildren() { 
        
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('children', [
            'articles' => $articles
        ]); 
        
        
    }
    public function actionAnimation() { 
        
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('animation', [
            'articles' => $articles
        ]); 
        
        
    }
    public function actionRestaurants() { 
        
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('restaurants', [
            'articles' => $articles
        ]); 
        
        
    }
    public function actionSport() { 
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('sport', [
            'articles' => $articles
        ]); 
        
        
    }
    public function actionBowling() { 
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('bowling', [
            'articles' => $articles
        ]); 
        
        
    }
    public function actionSolarium() { 
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('solarium', [
            'articles' => $articles
        ]); 
        }
    public function actionYachtClub() { 
        
         $articles = Articles::find()
            ->where(['visible' => 1])
            ->orderBy('sort desc')
            ->all();
            
        
        return $this->render('yacht-club', [
            'articles' => $articles
        ]); 
        
        
    }
=======

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
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec

}
