<?php

/* @var $this app\components\View */

use app\components\widgets\PhotosSliderWidget\PhotosSliderWidget;
use app\components\widgets\ContactsWidget\ContactsWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

$this->title = 'Солярий';

$this->registerScssFile("/css/entertainment/common.scss");
$this->registerScssFile("/css/entertainment/solarium.scss");

$photos = [
    '/images/entertainment/solarium/1.jpg',
    '/images/entertainment/solarium/2.jpg',
    '/images/entertainment/solarium/3.jpg',
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
                <h1><?= $this->title ?></h1>
                <div class="btn show-contact-modal">Оставить заявку</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="content">
            <p>
                Ультафиолетовые лучи вырабатывают в организме гормоны радости - эндорфины,
                вот почему бывает приятно лежать на пляже, подставив тело солнцу.
                Искусственный загар, полученный в солярии может стать альтернативой пребыванию на солнце.
                Недолгое пребывание под ультрафиолетовыми лучами дает эстетический эффект.
            </p>

            <p>
                Посещение солярия поможет побороть усталость, вызванную нехваткой солнечного света в темное время года,
                повышает жизненный тонус, да и просто поднимет настроение.
            </p>

            <p>Приглашаем Вас посетить вертикальный турбосолярий, расположенный на цокольном этаже Отеля.</p>

            <h2>Цены на посещение солярия</h2>

            <ul>
                <li>1 минута – 20 рублей</li>
                <li>Приобрести жетоны для солярия можно у администратора в холле Отеля.</li>
            </ul>

        </div>
    </div>

    <?= PhotosSliderWidget::widget(['photos' => $photos]) ?>

    <?= ArticlesSliderWidget::widget([
        'title' => 'Полезная информация',
        'links' => $articles
    ]) ?>

    <?= ContactsWidget::widget() ?>

</div>