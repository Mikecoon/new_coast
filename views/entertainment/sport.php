<?php

/* @var $this app\components\View */

use app\components\widgets\PhotosSliderWidget\PhotosSliderWidget;
use app\components\widgets\ContactsWidget\ContactsWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

$this->title = 'Занятия спортом';

$this->registerScssFile("/css/entertainment/common.scss");
$this->registerScssFile("/css/entertainment/sport.scss");

$photos = [
    '/images/entertainment/sport/1.jpg',
    '/images/entertainment/sport/2.jpg',
    '/images/entertainment/sport/3.jpg',
];

?>


<div id="entertainment-page">

    <div class="hero">
        <div class="container">
            <div class="content">
                <h1><?=$this->title?></h1>
                <div class="btn show-contact-modal">Оставить заявку</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="content">
            <p>
                Известно давно, что физическая активность - это один из самых эффективных способов предотвратить какие-либо заболевания у человека. Доказано, что физическая активность намного продлевает жизнь. Специальными сезонными предложениями для Гостей Отеля становятся:
            </p>

            <h2>Весной, летом и осенью</h2>

            <ul>
                <li>Парусная школа</li>
                <li>Обучение катанию на кайтборде и вейкборде</li>
                <li>Велосипеды</li>
                <li>Роликовые коньки</li>
                <li>Прогулки под парусом</li>
                <li>Пляж</li>
                <li>Открытый бассейн</li>
                <li>Корпоративные регаты</li>
                <li>Игры в волейбол</li>
                <li>Бадминтон</li>
            </ul>


            <h2>Зимой</h2>

            <ul>
                <li>Лыжи</li>
                <li>Коньки</li>
                <li>Ледяные горки</li>
            </ul>

            <h2>Круглый год</h2>

            <ul>
                <li>Настольный футбол</li>
                <li>Настольный теннис</li>
                <li>Бассейн</li>
                <li>Боулинг</li>
            </ul>

            <p>
                На заметку! Настольный теннис – игра, которая является не только спортивной, но и интеллектуальной. Не зря его называют «еврейским боксом» или «шахматами в движении».
            </p>


        </div>
    </div>

    <?= PhotosSliderWidget::widget(['photos' => $photos]) ?>

    <?= ArticlesSliderWidget::widget([
        'title' => 'Полезная информация',
        'links' => $articles
    ]) ?>

    <?= ContactsWidget::widget() ?>

</div>