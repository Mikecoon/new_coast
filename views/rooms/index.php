<?php

use app\assets\DatepickerAsset;
use app\assets\SliderAsset;
use app\components\widgets\BookWidget\BookWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;

SliderAsset::register($this);

$this->title = 'Номера';

$this->registerScssFile("/css/rooms/index.scss");

$this->registerJsFile("/js/rooms/index.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>


<div id="rooms-index">

    <div class="hero">

        <div class="container">
            <div class="content">
                <h1>Номера в отеле Яхт-клубе «Новый Берег»</h1>
                <p>Отель «Новый Берег» располагает номерным фондом, отличающимся как комфортом,
                    так и красотой, и уютом. Мы предлагаем Вам несколько вариантов номеров, подходящих
                    под любую ценовую категорию и любое количество постояльцев.</p>
            </div>
        </div>
    </div>

    <?=BookWidget::widget()?>

    <div class="rooms-list">
        <div class="container">
            <div class="content">
                <a class="room" href="/rooms/view">
                    <h3>«Стандарт» с двумя
                        раздельными кроватями

                        <span>от 2 700 руб</span>
                    </h3>

                    <div class="room-content">
                       <div class="buttons">
                           <div class="btn btn-book">Забронировать</div>
                           <div class="btn btn-details">Подробнее</div>
                       </div>
                    </div>
                </a>

                <a class="room" href="/rooms/view">
                    <h3>«Стандарт Плюс» с одной
                        двуспальной кроватью

                        <span>от 2 700 руб</span>
                    </h3>

                    <div class="room-content">
                        <div class="buttons">
                            <div class="btn btn-book">Забронировать</div>
                            <div class="btn btn-details">Подробнее</div>
                        </div>
                    </div>
                </a>

                <a class="room" href="/rooms/view">
                    <h3>«Комфорт» с одной
                        кроватью и балконом

                        <span>от 2 700 руб</span>
                    </h3>

                    <div class="room-content">
                        <div class="buttons">
                            <div class="btn btn-book">Забронировать</div>
                            <div class="btn btn-details">Подробнее</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?=CallbackWidget::widget()?>

</div>
