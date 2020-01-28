<?php

/**
 * @var $this \app\components\View
 * @var $rooms \app\models\Rooms[]
 */

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
                <h1>Номера в отеле «Новый Берег»</h1>
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

                <? foreach ($rooms as $room): ?>
                    <a class="room" href="/rooms/view?id=<?=$room->id?>" style="background-image: url('<?=count($room->photos) ? $room->photos[0]->image : '/images/rooms/index/room.jpg'?>')">
                        <h3><?=$room->name?>
                            <span>от <?=number_format($room->start_price, 0,'', ' ')?> руб</span>
                        </h3>

                        <div class="room-content">
                            <div class="buttons">
                                <div class="btn btn-book">Забронировать</div>
                                <div class="btn btn-details">Подробнее</div>
                            </div>
                        </div>
                    </a>
                <? endforeach; ?>

            </div>
        </div>
    </div>

    <?=CallbackWidget::widget()?>

</div>
