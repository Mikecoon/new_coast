<?php

/* @var $this app\components\View */

use app\components\widgets\PhotosSliderWidget\PhotosSliderWidget;
use app\components\widgets\ContactsWidget\ContactsWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

$this->title = 'Рестораны';

$this->registerScssFile("/css/entertainment/common.scss");
$this->registerScssFile("/css/entertainment/restaurants.scss");

$photos = [
    '/images/entertainment/restaurants/1.jpg',
    '/images/entertainment/restaurants/2.jpg',
    '/images/entertainment/restaurants/3.jpg',
];

$this->registerJsFile("/js/entertainment/restaurants.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

<<<<<<< HEAD
=======
$articles = [
    [
        'title' => 'Эко-отель в Подмосковье',
        'image' => '/images/services/index/useful-template.jpg',
        'href' => '#'
    ],

    [
        'title' => 'Эко-отель в Подмосковье',
        'image' => '/images/services/index/useful-template.jpg',
        'href' => '#'
    ],

    [
        'title' => 'Эко-отель в Подмосковье',
        'image' => '/images/services/index/useful-template.jpg',
        'href' => '#'
    ],

    [
        'title' => 'Эко-отель в Подмосковье',
        'image' => '/images/services/index/useful-template.jpg',
        'href' => '#'
    ],

    [
        'title' => 'Эко-отель в Подмосковье',
        'image' => '/images/services/index/useful-template.jpg',
        'href' => '#'
    ]
];
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec
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
        <div class="content-row ">
            <div class="text">

                <h2>Ресторан «ИZБА»</h2>

                <ul>
                    <li>Стоимость аренды: 5 000 руб. / час</li>
                    <li>Вместимость зала «ИZБА» до 40 человек, площадь 70 м<sup>2</sup></li>
                    <li>Обновлённый зал в стиле европейского шале с живописным панорамным видом на Пироговское водохранилище</li>
                    <li>Идеально подходит для организации свадеб, юбилеев, корпоративных и торжественных мероприятий,  проведения семинаров и тренингов, бизнес-игр и воркшопов</li>
                    <li>Wi-Fi, спутниковое ТВ, ТВ-плазма,  профессиональное звуковое оборудование (активные колонки, пульт, микрофон)</li>
                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-1/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-1/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-1/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-row reverse">
            <div class="text">

                <h2>Банкетный зал «Лагуна» </h2>

                <ul>
                    <li>Стоимость аренды: 5 000 руб. / час</li>
                    <li>Ресторан «Лагуна» подразделяется на два зала:</li>
                    <li>Ресторан 90 м<sup>2</sup>  - 40 человек</li>
                    <li>Банкетный зал ресторана: площадь 90 м<sup>2</sup> - 70 человек</li>
                    <li>Идеально подходит для организации свадьбы или банкета</li>
                    <li>Зал расположен на первом этаже отеля и открыт  24 часа в сутки</li>

                    <p class="remark">* При аренде только одного зала второй зал работает под свободную посадку других гостей Отеля, арендная плата не взимается</p>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-2/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-2/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-2/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-row ">
            <div class="text">

                <h2>Бургер-бар «Парус»</h2>

                <ul>
                    <li>Стоимость аренды: 50 000 руб. / 6 часов</li>
                    <li>Летняя площадка 100 м<sup>2</sup></li>
                    <li>Вместимость до 40 человек</li>
                    <li>Находится прямо у воды, что придаёт особый шарм и романтическую обстановку</li>
                    <li>Прекрасное место, чтобы организовать небольшой банкет, фуршет, празднование свадьбы, выпускного вечера или корпоративного мероприятия</li>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-5/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-5/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-5/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?= PhotosSliderWidget::widget(['photos' => $photos]) ?>

    <?= ArticlesSliderWidget::widget([
        'title' => 'Полезная информация',
        'links' => $articles
    ]) ?>

    <?= ContactsWidget::widget() ?>

</div>