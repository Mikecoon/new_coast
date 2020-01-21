<?php
/* @var $this app\components\View */

use app\assets\SliderAsset;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;

SliderAsset::register($this);

$this->title = 'Организация свадьбы ';

$this->registerScssFile("/css/services/common.scss");
$this->registerScssFile("/css/services/wedding.scss");

$this->registerJsFile("/js/services/wedding.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="services-page">

    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Организация свадьбы</h1>
                <div class="btn">Оставить заявку</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="content-row">
            <div class="text">

                <h2>Ваше торжество:</h2>

                <ul>
                    <li>Специальный свадебный шатёр или банкетный зал</li>
                    <li>Банкетное меню от Шеф-повара Отеля</li>
                    <li>Возможность украсить зал по Вашему усмотрению</li>
                    <li>Выездная регистрация на фоне водной глади</li>
                    <li>Свадьбы «под ключ» по фиксированной цене</li>
                </ul>

            </div>

            <div class="image">
                <img src="/images/services/wedding/3.jpg" alt="Ваше торжество">
            </div>
        </div>

        <div class="content-row reverse">
            <div class="text">

                <h2>Романтическая ночь:</h2>

                <ul>
                    <li>Уютный просторный номер с балконом</li>
                    <li>Вкусный завтрак в постель (необходимо
                        предварительно заказать)</li>
                </ul>

            </div>

            <div class="image">
                <img src="/images/services/wedding/2.jpg" alt="Романтическая ночь">
            </div>
        </div>

        <div class="content-row">
            <div class="text">

                <h2>Подарки молодоженам:</h2>

                <ul>
                    <li>Номер «Люкс» в подарок при проведении свадебного
                        банкета на территории Отеля Яхт-клуба Новый Берег</li>
                    <li>15% скидка на размещение Ваших Гостей в Отеле при проведении свадебного банкета на территории Отеля Яхт-клуба Новый Берег</li>
                    <li>При бронировании номера для новобрачных в день бракосочетания (без банкета) — 15% скидка на проживание</li>
                </ul>

            </div>

            <div class="image">
                <img src="/images/services/wedding/3.jpg" alt="Подарки молодоженам">
            </div>
        </div>

        <div class="menu-btn">
            <img src="/images/site/icons/meals.svg" alt="Банкетное меню">
            Банкетное меню
        </div>

    </div>

    <div class="photos">

        <div id="photos-slider">
            <div class="photo"><img src="/images/services/wedding/slider/1.jpg" alt=""></div>
            <div class="photo"><img src="/images/services/wedding/slider/2.jpg" alt=""></div>
            <div class="photo"><img src="/images/services/wedding/slider/3.jpg" alt=""></div>

        </div>

    </div>

    <div class="about">

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2>Организация свадьбы
                        в Подмосковье!</h2>

                    <p>
                        Свадьба — большой праздник в жизни любого человека, поэтому в этот день устраивают большое торжество.
                        К этому важному событию готовятся очень тщательно, продумывая количество приглашенных,
                        меню банкета, программу праздника, пригласительные открытки, платья для подружек невесты и
                        многое другое. И конечно, выбирают кафе или ресторан для свадьбы с учетом количества гостей и
                        особенностей праздника. Наш загородный отель в Подмосковье (в 9 км от Москвы) для проведения
                        свадеб — подходящий вариант. Ведь помимо всего остального, у нас молодожены и их гости могут
                        сделать прекрасные фотографии и насладиться видами — у воды, на фоне красивой природы и яхт!

                        <br> <br>
                        Как правило, свадьбы проводят в летнее время. Когда тепло, все вокруг зелено и светит солнца,
                        хочется быть на открытом воздухе как можно дольше. Поэтому свадьба в шатре очень популярна — за
                        городом, на свежем воздухе праздники проходят еще лучше, чем в банкетном зале.
                    </p>



                </div>
                <div class="col-md-6">
                    <div class="image">
                        <img src="/images/site/pricing/about.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="container">


        <?= ArticlesSliderWidget::widget([
                    'title' => 'Полезная информация',
                    'links' => [
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
                    ]
                ]) ?>


    </div>

    <?=CallbackWidget::widget()?>
</div>