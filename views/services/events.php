<?php
/* @var $this app\components\View */

use app\assets\SliderAsset;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;

SliderAsset::register($this);

$this->title = 'Корпоративные мероприятия';

$this->registerScssFile("/css/services/common.scss");
$this->registerScssFile("/css/services/events.scss");

$this->registerJsFile("/js/services/events.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

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

        <div class="content-row" data-scheme="[40, 40, 40, 40]">
            <div class="text">

                <h2>Банкетный зал «ИZБА»</h2>

                <ul>
                    <li>Стоимость аренды: 5 000 руб. / час</li>
                    <li>Вместимость зала «ИZБА» до 40 человек, площадь 70 м<sup>2</sup></li>
                    <li>Обновлённый зал в стиле европейского шале с живописным панорамным видом на Пироговское водохранилище</li>
                    <li>Идеально подходит для организации свадеб, юбилеев, корпоративных и торжественных мероприятий,  проведения семинаров и тренингов, бизнес-игр и воркшопов</li>
                    <li>Wi-Fi, спутниковое ТВ, ТВ-плазма,  профессиональное звуковое оборудование (активные колонки, пульт, микрофон)</li>
                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid">Оставить заявку</a>
                    <a href="#" class="btn border btn-show-scheme" >Тип рассадки</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-1/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-1/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-1/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="scheme" style="display: none">
                here we go
            </div>
        </div>

        <div class="content-row reverse" data-scheme="[40, 30, 40, 90]">
            <div class="text">

                <h2>Конференц-зал «Саммит»</h2>

                <ul>
                    <li>Стоимость аренды (без оборудования): 2 500 руб. / час</li>
                    <li>Площадь 81 м<sup>2</sup, вместимость  до 90 человек</li>

                    <li>Зал отвечает всем современным стандартам, подходит для презентаций, переговоров, семинаров и конференций</li>
                    <li>Радиомикрофон, ноутбук, экран, проектор, DVD/VHS, акустика, ресивер, акустика, флипчарт + блок бумаги, пластиковая доска + маркеры, сплит-система, стационарный телефон</li>
                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid">Оставить заявку</a>
                    <a href="#" class="btn border  btn-show-scheme">Тип рассадки</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/events/slider-2/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/events/slider-2/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/events/slider-2/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div >

        <div class="content-row " data-scheme="[22, 22, 28, 30]" >
            <div class="text">

                <h2>Переговорная комната «Сессия»</h2>

                <ul>
                    <li>Стоимость аренды (без оборудования): 1 000 руб. / час</li>
                    <li>Площадь 38 м<sup>2</sup></li>
                    <li>Вместимость до 35 человек</li>
                    <li>Небольшая уютная аудитория для проведения деловых переговоров, встреч и круглых столов</li>
                    <li>К Вашим услугам полное техническое оснащение:
                        ноутбук, проектор,  экран, DVD/VHS, ресивер, флипчарт + блок бумаги</li>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid">Оставить заявку</a>
                    <a href="#" class="btn border  btn-show-scheme">Тип рассадки</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/events/slider-3/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/events/slider-3/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/events/slider-3/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-row reverse" data-scheme="[18, 16, 22, 25]">
            <div class="text">

                <h2>Переговорная комната «Диалог»</h2>

                <ul>
                    <li>Стоимость аренды (без оборудования): 1 000 руб. / час</li>
                    <li>Площадь 31 м<sup>2</sup>, вместимость  до 35 человек</li>
                    <li>Небольшая уютная аудитория для проведения деловых переговоров, встреч и круглых столов</li>
                    <li>К Вашим услугам полное техническое оснащение: ноутбук, проектор,  экран, DVD/VHS, ресивер, флипчарт + блок бумаги</li>
                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid">Оставить заявку</a>
                    <a href="#" class="btn border  btn-show-scheme">Тип рассадки</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/events/slider-4/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/events/slider-4/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/events/slider-4/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-row " data-scheme="[200, 80, 150, 350]">
            <div class="text">

                <h2>Многофункциональный зал «Фрегат» </h2>

                <ul>
                    <li>Стоимость аренды (без оборудования): 5 000 руб. / час</li>
                    <li>Площадь 540 м2, вместимость  до 350 человек</li>

                    <li>Просторный зал, оснащенный профессиональным аудио
                        и видео оборудованием, подходит для организации конференций и конгрессов.</li>
                    <li>К Вашим услугам полное техническое оснащение:
                        ноутбук, проектор,  экран, DVD/VHS, ресивер, флипчарт + блок бумаги</li>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid">Оставить заявку</a>
                    <a href="#" class="btn border  btn-show-scheme">Тип рассадки</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/events/slider-5/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/events/slider-5/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/events/slider-5/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

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