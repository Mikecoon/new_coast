<?php

/* @var $this app\components\View */

use app\components\widgets\PhotosSliderWidget\PhotosSliderWidget;
use app\components\widgets\ContactsWidget\ContactsWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

$this->title = 'Яхт-клуб';

$this->registerScssFile("/css/entertainment/common.scss");
$this->registerScssFile("/css/entertainment/yacht-club.scss");

$photos = [
    '/images/entertainment/yacht-club/1.jpg',
    '/images/entertainment/yacht-club/2.jpg',
    '/images/entertainment/yacht-club/3.jpg',
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
                Зимнее и летнее хранение судов! Стоянка в теплом эллинге.
            </p>

            <p>
                Капитальный отапливаемый эллинг с постоянной температурой +20 градусов, вместимостью до 40 судов. Высота
                по воротам 5 м 20 см!
                В наличии имеется электрогидравлическая тележка для перевозки судов до 25 тонн. Квалифицированные
                специалисты клуба проводят сервисное обслуживание, а также устраняют неисправности сложных технических
                устройств лодок. Режим работы эллинга - круглогодично.
            </p>

            <p>
                Администрация яхт-клуба: +7 (495) 532 532 5
            </p>

            <h2>Водные развлечения летом:</h2>

            <ul>
                <li>Теплоход «Ангара» (до 20 человек) 2 часа 16 000 рублей*</li>
                <li>Теплоход «Ангара» 3 часа 21 000 рублей</li>
                <li>Теплоход «Ангара» Каждый последующий час 7 000 рублей</li>
                <li>Теплоход «Ангара» Световой день (с 10.00 до 22.00) 50 000 рублей</li>
                <li>Катер скоростной открытый «Сандек» (до 6 человек)</li>
                <li>Катер «Сандек» 1 час, при аренде свыше 3-х часов 6 000 рублей</li>
                <li>Катер «Сандек» Световой день (с 10.00 до 22.00) 50 000 рублей</li>
                <li>Водный велосипед с горкой (большой) 1 час 1000 рублей</li>
            </ul>

            <p class="hint">*предоставляется только с капитаном, маршрут и места стоянок по согласованию.</p>


            <h2>Аренда яхты в подмосковье</h2>

            <p>
                Вы еще никогда не пробовали кататься на яхте, или уже полюбили прогулки на воде? В Любом случае,
                приглашаем вас в яхт-клуб отеля «Новый берег», расположенный в Подмосковье. Здесь можно взять в аренду
                яхту, катер, теплоход;чтобы покататься, организовать праздник или устроить соревнования-регату в
                Подмосковье для любителей водных приключений.
            </p>

            <p>
                Наш отель расположен на берегу Пироговского водохранилища – это отличное место для аренды яхты и водных
                прогулок. Живописная природа, свежий речной воздух, просторная водная гладь – это заставит вас влюбиться
                в водные путешествия. Как показывают отзывы посетителей, яхт-клуб – решение для тех, кому хочется
                чего-либо новенького и необычного.
            </p>

            <p>
                Как и все хорошие яхт-клубы Подмосковья, мы предлагаем отапливаемый эллинг для зимнего хранения судов,
                оборудованный тележкой для перевозки и вместительностью до 40 судов. Квалифицированные специалисты
                проводят сервисное обслуживание яхт, а также осуществляют ремонт.
            </p>

            <p>
                Если у вас намечается свадьба, и вы хотите сделать ее волшебной, приглашаем провести ее в нашем
                яхт-клубе! В вашем распоряжении яхты и теплоход вместимостью до 55 человек, на котором можно провести
                праздник. Можно также устроить корпоратив, банкет в честь дня рождения и просто прогулку на яхте.
            </p>

            <p>
                Адрес нашего яхт-клуба можно найти на нашем официальном сайте отеля «Новый берег» в разделе контакты.
                Помимо водных прогулок, здесь вас ждет множество других развлечений и отличное настроение. Добро
                пожаловать!
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