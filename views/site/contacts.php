<?php
/* @var $this app\components\View */

use app\components\widgets\BookWidget\BookWidget;

$this->title = 'Контакты';

$this->registerScssFile("/css/site/contacts.scss");

$this->registerJsFile("https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=4849b266-2723-45ca-8825-30bb48516ac8", [
    'depends' => \yii\web\JqueryAsset::class
]);

$this->registerJsFile("/js/site/contacts.js", [
    'depends' => \yii\web\JqueryAsset::class
]);


?>

<div id="site-contacts">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Контакты</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="contacts">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">Единый центр бронирования</div>

                    <div class="value">+7 (495) 956-65-23</div>
                    <div class="value">+7 (495) 956-65-23</div>
                    <div class="value">+7 (495) 956-65-23</div>

                    <div class="title">Организация мероприятий </div>

                    <div class="value">+7 (495) 230-25-21</div>
                    <div class="value">+7 (915) 482-78-57</div>

                    <div class="title">Контактные E-mail</div>

                    <div class="value">По вопросам бронирования: <a href="mailto:reception@grk-nb.com">reception@grk-nb.com</a></div>
                    <div class="value">По общим вопросам:: <a href="mailto:reception@grk-nb.com">reception@grk-nb.com</a></div>
                    <div class="value">Отдел продаж:: <a href="mailto:reception@grk-nb.com">reception@grk-nb.com</a></div>
                    <div class="value"><small> (для заявок на конференции, банкеты, свадьбы, корп. мероприятия)</small></div>

                    <div class="title">Адрес отеля</div>
                    <div class="value">Московская область, Мытищинский район, д. Болтино, <br>
                        ул. Туристическая (съезд с Осташковского шоссе на ул. 8-линия)</div>

                    <div class="buttons">
                        <a class="btn" href="#">Подробная карта проезда</a>

                        <a class="yandex-maps" href="#"><img src="/images/site/icons/yandex-maps.svg" alt=""></a>
                        <a class="google-maps" href="#"><img src="/images/site/icons/google-maps.svg" alt=""></a>
                    </div>



                </div>

                <div class="col-md-6">
                    <img src="/images/site/contacts/map.jpg" alt="" class="map-image">
                </div>
            </div>
        </div>

        <div id="map">

        </div>
    </div>


    <?=BookWidget::widget()?>

</div>