<?php

/**
 * @var $this \app\components\View
 * @var $model \app\models\Rooms
 */

use app\assets\DatepickerAsset;
use app\components\widgets\BookWidget\BookWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;
use app\components\widgets\PhotosSliderWidget\PhotosSliderWidget;

DatepickerAsset::register($this);

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
                <h1><?=$model->name?></h1>
                <div class="price">от <?=number_format($model->start_price, 0,'', ' ')?> руб.</div>
            </div>
        </div>
    </div>
    <?= BookWidget::widget() ?>

    <div class="room">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="param">
                        <div class="title">Количество гостей</div>
                        <div class="value"><?=$model->capacity?></div>
                    </div>

                    <div class="param">
                        <div class="title">Площадь номера</div>
                        <div class="value"><?=$model->square?> м<sup>2</sup></div>
                    </div>
                </div>

                <div class="col-md-8">

                    <h2>Описание</h2>
                    <p><?=$model->description?></p>

                    <h2>Удобства</h2>
                    <ul class="facilities">
                        <? foreach (explode("\r", $model->facilities) as $facility): ?>
                            <li><?=$facility?></li>
                        <? endforeach;?>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <?= PhotosSliderWidget::widget(['photos' => array_map(function ($photo) {
        return $photo->image;
    }, $model->photos)]) ?>

    <?= CallbackWidget::widget() ?>

</div>
