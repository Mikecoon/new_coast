<?php

/* @var $this app\components\View */

use app\components\widgets\PhotosSliderWidget\PhotosSliderWidget;
use app\components\widgets\ContactsWidget\ContactsWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

$this->title = 'Анимация';

$this->registerScssFile("/css/entertainment/common.scss");
$this->registerScssFile("/css/entertainment/animation.scss");

$photos = [
    '/images/entertainment/animation/1.jpg',
    '/images/entertainment/animation/2.jpg',
    '/images/entertainment/animation/3.jpg',
];

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
                Отель Новый Берег — это удивительное место, где спокойный отдых на природе можно совместить с активными развлечениями в веселой компании. Команда анимации в нашем отеле — одна из лучших в Подмосковье!
            </p>

            <p>
                Каждый взрослый в душе чуть-чуть ребенок, и у нас в гостях вы в этом убедитесь. Наши аниматоры развеселят даже самого спокойного Гостя. Различные турниры, конкурсы и соревнования с неизменным успехом проходят в Отеле Яхт-клубе «Новый Берег».
            </p>

            <p>
                В то время, пока взрослые соревнуются в меткости, силе или кулинарных способностях, ваши детки будут открывать в себе новые таланты с нашим детским аниматором. Рисование, спортивные соревнования, Face art и мини дискотеки — развлечения на любой, даже самый капризный, детский вкус.
            </p>

            <p>
                Дом отдыха в Подмосковье с анимацией — отличный шанс весело отдохнуть и детям, и взрослым!
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