<?php
/**
 * @var $this app\components\View
 * @var $articles \app\models\Articles[]
 * @var $places \app\models\Places[]
 */

use app\assets\SliderAsset;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;
use app\models\Places;

SliderAsset::register($this);

$this->title = 'Корпоративные мероприятия';

$this->registerScssFile("/css/services/common.scss");
$this->registerScssFile("/css/services/events.scss");

$this->registerJsFile("/js/services/events.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

$typeKeys = array_keys(Places::$types);

$defaultType = reset($typeKeys);


?>

<div id="services-page">

    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Корпоративные мероприятия</h1>
                <div class="btn">Оставить заявку</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="types">
            <? foreach (Places::$types as $key => $name): ?>
                <div class="type <?=$defaultType == $key ? "active" : ""?>" data-key="<?=$key?>"><?=$name?></div>
            <? endforeach;?>
        </div>

        <? foreach ($places as $key => $place): ?>
            <div class="content-row <?=$key%2 ? "reverse": ""?> <?=$place->type == $defaultType ? "" : "hidden"?>" data-scheme='<?=$place->capacity?>' data-type="<?=$place->type?>">
                <div class="text">

                    <h2><?=$place->name?></h2>

                    <div class="place-content">
                        <?=$place->content?>
                    </div>

                    <div class="buttons">
                        <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                        <a href="#" class="btn border btn-show-scheme" >Тип рассадки</a>
                    </div>

                </div>

                <div class="image">
                    <div class="slider-wrapper">
                        <div class="slider">
                            <? foreach ($place->photos as $photo):?>
                                <div class="slide"><img src="<?=$photo->image?>" alt=""></div>
                            <? endforeach;?>
                        </div>
                    </div>
                </div>
            </div>

        <? endforeach;?>

    </div>

    <div class="modal">
        <div class="content">
            <div class="scheme">
                <table>
                    <thead>
                        <tr>
                            <th>Тип рассадки</th>
                            <th>Вместительность</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><img src="/images/services/events/scheme/1.svg" alt=""></td>
                            <td>
                                <img src="/images/services/events/scheme/person.jpg" alt="" class="icon">
                                до <span></span> персон
                            </td>
                        </tr>

                        <tr>
                            <td><img src="/images/services/events/scheme/2.svg" alt=""></td>
                            <td>
                                <img src="/images/services/events/scheme/person.jpg" alt="" class="icon">
                                до <span></span> человек
                            </td>
                        </tr>

                        <tr>
                            <td><img src="/images/services/events/scheme/3.svg" alt=""></td>
                            <td>
                                <img src="/images/services/events/scheme/person.jpg" alt="" class="icon">
                                до <span></span> мест
                            </td>
                        </tr>

                        <tr>
                            <td><img src="/images/services/events/scheme/4.svg" alt=""></td>
                            <td>
                                <img src="/images/services/events/scheme/person.jpg" alt="" class="icon">
                                до <span></span> персон
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="about">

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2>Залы для конференций
                        в Подмосковье
                    </h2>

                    <p>
                        Различные конференции, тренинги, деловые переговоры и корпоративный отдых у воды на природе – все это оказывает благоприятное действие на отношения в коллективе и производительность труда. Обучающие мероприятия, которые проводятся за пределами привычного офисного помещения, например, в одном из залов для конференций в отеле в Подмосковье, более эффективны и значительно повышают квалификацию сотрудников.
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
            'links' => $articles
        ]) ?>
    </div>

    <?=CallbackWidget::widget()?>
</div>