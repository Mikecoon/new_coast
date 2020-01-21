<?php
/* @var $this app\components\View */

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

            <a href="/schedule/view?id=1" style="background-image: url('/images/site/schedule/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/schedule/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/schedule/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/schedule/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/schedule/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/schedule/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>


        </div>

    </div>


    <?=CallbackWidget::widget()?>
</div>