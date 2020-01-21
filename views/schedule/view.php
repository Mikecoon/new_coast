<?php
/* @var $this app\components\View */

use app\components\widgets\CallbackWidget\CallbackWidget;

$this->title = 'Мероприятие';

$this->registerScssFile("/css/schedule/view.scss");

$this->registerJsFile("/js/schedule/view.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="schedule-view">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Ваш праздник в Новом Береге</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <p></p>
    </div>

    <?=CallbackWidget::widget()?>
</div>