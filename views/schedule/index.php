<?php
/**
 * @var $this app\components\View
 * @var $events \app\models\Events[]
 */

use app\components\widgets\CallbackWidget\CallbackWidget;

$this->title = 'Афиша мероприятий';

$this->registerScssFile("/css/schedule/index.scss");

$this->registerJsFile("/js/schedule/index.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="schedule-index">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Афиша мероприятий</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid">
            <? foreach ($events as $event): ?>
<<<<<<< HEAD
                <a href="/schedule/view?id=<?=$event->id?>" style="background: linear-gradient(to bottom, rgba(0,0,0, 100), rgba(0,0,0, 0)), url('<?=$event->image?>')">
=======
                <a href="/schedule/view?id=<?=$event->id?>" style="background-image: url('<?=$event->image?>')">
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec

                    <div class="title"><?=$event->title?></div>
                    <div class="description"><?=$event->description?></div>

                    <div class="btn">Подробнее</div>

                </a>
            <? endforeach;?>
        </div>
    </div>
    <?=CallbackWidget::widget()?>
</div>