<?php

/* @var $this app\components\View */

use app\components\widgets\PhotosSliderWidget\PhotosSliderWidget;
use app\components\widgets\ContactsWidget\ContactsWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

$this->title = 'SPA-комплекс и бассейны';

$this->registerScssFile("/css/entertainment/common.scss");
$this->registerScssFile("/css/entertainment/spa.scss");

$photos = [
    '/images/entertainment/spa/1.jpg',
    '/images/entertainment/spa/2.jpg',
    '/images/entertainment/spa/3.jpg',
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
                На выходных запланируйте расслабляющий отдых в нашем отеле в Подмосковье: в спа-комплексе с бассейном, недорого и на условиях «все включено» для тех, кто у нас проживает.
            </p>

            <p>Получите массу удовольствия от пребывания в уютном и современном Спа-комплексе, почувствуйте себя на отдыхе! Турецкий хаммам, финская сауна, джакузи и бассейн позволят Вам отлично провести время и набраться позитивных впечатлений на долгие месяцы!
            </p>

            <p>SPA-отдых на нашей базе в ближайшем Подмосковье подарит вам ощущение отпуска без утомительных перелетов и акклиматизации (особенно если вы — гости из Москвы или Московской области). Мы находимся всего в 9 км от столицы. Недолгий путь до отеля — и отдых начался! Загородная жизнь на заливе, на Пироговском водохранилище — это расслабленная атмосфера, тишина, уют и все возможности зарядиться энергией перед трудовой неделей.
            </p>

            <p>Хотите отдохнуть с детьми? Возьмите их с собой в бассейн, или же мы с удовольствием примем их в нашем Детском клубе, в то время как родители смогут расслабиться и насладиться спокойной атмосферой.</p>

            <h2>Режим работы SPA-комплекса</h2>

            <ul>
                <li>SPA-комплекс в Отеле работает круглогодично</li>
                <li>Время посещения комплекса: с 07:00 до 23:00</li>
                <li> Хаммам и финская сауна работают с 13:00 до 23:00</li>
                <li>Технический перерыв ежедневно: с 12:00 до 13:00 и с 17:00 до 18:00</li>
                <li>Внимание: каждый понедельник с 07:00 до 18:00  комплекс закрыт на профилактические работы</li>
            </ul>

            <h2>Цены на посещение SPA-комплекса</h2>

            <ul>
                <li>Для Гостей, проживающих в Отеле, — бесплатно!</li>
                <li>Для остальных Гостей (кроме субботы) — 700 рублей /2 часа</li>
                <li>Дополнительный час для взрослого — 300 рублей</li>
                <li>Дети до 7 лет — бесплатно в сопровождении родителей</li>
                <li>Дети от 7 до 12 лет — 350 рублей/2 часа</li>
                <li>Дополнительный час для детей от 7 до 12 лет — 150 рублей</li>
            </ul>

            <h2>Открытый бассейн 25х8м с трамплином </h2>

            <p>Открытый бассейн расположен в пляжной зоне Отеля. Лето 2019 - открытие бассейна после реконструкции. Вас ждет:</p>

            <ul>
                <li>Подогреваемый бассейн</li>
                <li>Комфортные шезлонги</li>
                <li>БАР зона</li>
                <li>DJ с 11:00 до 21:00 в выходные дни</li>
            </ul>

            <h2>Цены на посещение открытого бассейна</h2>

            <ul>
                <li>Для детей младше 7 лет бесплатно!</li>
                <li>Для детей от 7 до 12 лет - 350 рублей</li>
                <li>Для всех остальных возрастов действует единая цена 700 рублей</li>
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