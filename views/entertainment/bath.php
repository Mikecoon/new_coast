<?php

/* @var $this app\components\View */

use app\components\widgets\PhotosSliderWidget\PhotosSliderWidget;
use app\components\widgets\ContactsWidget\ContactsWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

$this->title = 'Банный комплекс';

$this->registerScssFile("/css/entertainment/common.scss");
$this->registerScssFile("/css/entertainment/bath.scss");

$photos = [
    '/images/entertainment/bath/1.jpg',
    '/images/entertainment/bath/2.jpg',
    '/images/entertainment/bath/3.jpg',
];

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

        <div class="content">
            <p>
                Добро пожаловать в настоящую русскую баню на дровах, которая расположена в уютном коттедже! Позвольте
                себе отдых, несравнимый ни с чем! Вас ожидает домашний уют и тепло.
            </p>

            <p>
                Мы рады предложить Вам комфортные условия – парная, купель, ведро-водопад с ледяной водой, просторная
                гостиная, комната отдыха, бар, летняя веранда. К Вашим услугам рядом с баней в этом же коттедже
                великолепный бильярдный зал со столами для русского бильярда и пула.
            </p>

            <p>Вы мечтаете расслабиться и отвлечься от повседневных проблем? Приходите к нам! Мы всегда рады
                гостям! </p>

            <h2>Режим работы Бани</h2>

            <ul>
                <li>Ежедневно с 13:00 до 01:00</li>
            </ul>

            <h2>Стоимость</h2>

            <ul>
                <li>Ежедневно: 6 чел./1 час – 3 000 рублей</li>
            </ul>

            <h2>Дом отдыха в Подмосковье с бассейном</h2>

            <p>Баня – древнее и очень полезное изобретение, которое призвано очищать тело и разум, укреплять здоровье и приносить удовольствие. К сожалению, не у всех есть возможность иметь собственную баню, да и ухаживать за ней не так просто. Чтобы славно попариться, достаточно приехать в Подмосковье, где есть дом отдыха с сауной и бассейном для отличного отдыха.</p>

            <p>Кратковременная поездка в Подмосковье на выходные – отличный недорогой вариант, а баня сделает такой небольшой отпуск незабываемым. У нас есть все необходимое для комфортного отдыха – полотенца, веники, зона отдыха и богатое меню ресторана. Если у вас совсем мало времени – предлагаем баню на сутки, этого достаточно для заряда жизненными силами, а свежий воздух Подмосковья усилит положительный эффект.</p>

            <p>Снять баню в Подмосковье на выходные – универсальный недорогой вариант как для шумной компании, так и для молодой семьи. Время в парной пролетает незаметно, а польза для здоровья огромна. Женщины очень любят баню, потому что она помогает сохранить красоту, похудеть и улучшить состояние кожи. Как показывает практика, за выходные в отеле Подмосковья, которые сопровождаются отдыхом в бане и бассейне, спокойно уходят до 5 килограмм.</p>

        </div>
    </div>

    <?= PhotosSliderWidget::widget(['photos' => $photos]) ?>

    <?= ArticlesSliderWidget::widget([
        'title' => 'Полезная информация',
        'links' => $articles
    ]) ?>

    <?= ContactsWidget::widget() ?>

</div>