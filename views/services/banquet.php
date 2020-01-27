<?php
/* @var $this app\components\View */

use app\assets\SliderAsset;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;

SliderAsset::register($this);

$this->title = 'Банкеты';

$this->registerScssFile("/css/services/common.scss");
$this->registerScssFile("/css/services/banquet.scss");

$this->registerJsFile("/js/services/wedding.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="services-page">

    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Банкетные залы</h1>
                <div class="btn show-contact-modal">Оставить заявку</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="content-row ">
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
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
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
        </div>

        <div class="content-row reverse">
            <div class="text">

                <h2>Банкетный зал «Лагуна» </h2>

                <ul>
                    <li>Стоимость аренды: 5 000 руб. / час</li>
                    <li>Ресторан «Лагуна» подразделяется на два зала:</li>
                    <li>Ресторан 90 м<sup>2</sup>  - 40 человек</li>
                    <li>Банкетный зал ресторана: площадь 90 м<sup>2</sup> - 70 человек</li>
                    <li>Идеально подходит для организации свадьбы или банкета</li>
                    <li>Зал расположен на первом этаже отеля и открыт  24 часа в сутки</li>

                    <p class="remark">* При аренде только одного зала второй зал работает под свободную посадку других гостей Отеля, арендная плата не взимается</p>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-2/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-2/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-2/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-row ">
            <div class="text">

                <h2>Летняя площадка «Клешня»</h2>

                <ul>
                    <li>Стоимость аренды зала (без звукового и светового оборудования): 50 000 руб. / 6 часов</li>
                    <li>Площадь 450 м<sup>2</sup></li>
                    <li>Вместимость до 250 человек</li>
                    <li>Летняя банкетная площадка расположена на крыше
                        эллинга с видом на Пироговское водохранилище!</li>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-3/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-3/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-3/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-row reverse">
            <div class="text">

                <h2>«Малый шатер»</h2>

                <ul>
                    <li>Стоимость аренды зала (без звукового и светового оборудования): 35 000 руб. / 6 часов</li>
                    <li>Площадь 200 м<sup>2</sup></li>
                    <li>Вместимость до 90 человек</li>
                    <li>Утеплённый шатёр в пляжной зоне Отеля, с возможностью проведения мероприятий круглый год.</li>
                    <li>Идеальное место для проведения неофициальных банкетов, свадеб, торжеств. Великолепный вид на водохранилище. </li>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-4/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-4/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-4/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-row ">
            <div class="text">

                <h2>Бургер-бар «Парус»</h2>

                <ul>
                    <li>Стоимость аренды: 50 000 руб. / 6 часов</li>
                    <li>Летняя площадка 100 м<sup>2</sup></li>
                    <li>Вместимость до 40 человек</li>
                    <li>Находится прямо у воды, что придаёт особый шарм и романтическую обстановку</li>
                    <li>Прекрасное место, чтобы организовать небольшой банкет, фуршет, празднование свадьбы, выпускного вечера или корпоративного мероприятия</li>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-5/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-5/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-5/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-row reverse">
            <div class="text">

                <h2>«Фрегат»</h2>

                <ul>
                    <li>Стоимость аренды: 40 000 руб. / 6 часов</li>
                    <li>Обновлённый многофункциональный зал 500 м<sup>2</sup></li>
                    <li>Вместимость до 300 человек </li>
                    <li>Оснащён профессиональным световым и звуковым оборудованием</li>
                    <li>Идеально подходит для выставок, конгрессов, выпускных вечеров или корпоративных мероприятий</li>

                </ul>

                <div class="buttons">
                    <a href="#" class="btn solid show-contact-modal">Оставить заявку</a>
                    <a href="#" class="btn border">Банкетное меню</a>
                </div>

            </div>

            <div class="image">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide"><img src="/images/services/banquet/slider-6/1.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-6/2.jpg" alt=""></div>
                        <div class="slide"><img src="/images/services/banquet/slider-6/1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="about">

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2>Аренда зала для
                        банкета и фуршета</h2>

                    <p>
                        Банкет — торжественное мероприятие в честь человека или события, на которое собирается, как правило, много приглашенных гостей.
                        Торжественную атмосферу создают красивое помещение и сервировка, особый праздничный дресс-код, вежливые официанты и сама атмосфера праздника.
                        <br> <br>
                        Фуршет отличается официальной атмосферой, небольшим количеством гостей и тем, что он проводится стоя.
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