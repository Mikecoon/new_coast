<?php

use app\assets\DatepickerAsset;
use app\assets\SliderAsset;
use app\components\widgets\BookWidget\BookWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;

DatepickerAsset::register($this);
SliderAsset::register($this);

$this->title = 'Номер';

$this->registerScssFile("/css/rooms/view.scss");

$this->registerJsFile("/js/rooms/view.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>


<div id="rooms-view">

    <div class="hero">

        <div class="container">
            <div class="content">
                <h1>«Стандарт Плюс» с одной двуспальной кроватью</h1>
                <div class="price">от 2700 руб.</div>
            </div>
        </div>
    </div>
    <?=BookWidget::widget()?>

    <div class="room">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="param">
                        <div class="title">Количество гостей</div>
                        <div class="value">2 гостя + 1 доп. место</div>
                    </div>

                    <div class="param">
                        <div class="title">Площадь номера</div>
                        <div class="value">20 м<sup>2</sup></div>
                    </div>
                </div>

                <div class="col-md-8">

                    <h2>Описание</h2>

                    <p>
                        Номер «Стандарт» с двумя кроватями – это идеальный выбор для двухместного размещения. Оснащение включает в себя все необходимые для наиболее комфортабельного отдыха. Интерьер выполнен в приятных мягких цветах
                        и располагает, как для спокойного отдыха, так и для результативной работы.
                    </p>

                    <h2>Удобства</h2>

                    <ul class="facilities">
                        <li>Две кровати</li>
                        <li>Два мягких кресла</li>
                        <li>Просторный шкаф-купе</li>
                        <li>Письменный стол</li>
                        <li>Телефон</li>
                        <li>Бассейн, сауна</li>
                        <li>Настольный теннис</li>
                        <li>Кондиционер</li>
                        <li>Телевизор</li>
                        <li>Мини-холодильник</li>
                        <li>Ванная комната</li>
                        <li>Фен</li>
                        <li>Wi-fi</li>
                        <li>Автостоянка при въезде в отель</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="photos">

        <div id="photos-slider">
            <div class="photo"><img src="/images/rooms/view/photo-1.jpg" alt=""></div>
            <div class="photo"><img src="/images/rooms/view/photo-2.jpg" alt=""></div>
            <div class="photo"><img src="/images/rooms/view/photo-1.jpg" alt=""></div>
            <div class="photo"><img src="/images/rooms/view/photo-2.jpg" alt=""></div>
        </div>

    </div>


    <?=CallbackWidget::widget()?>

</div>
