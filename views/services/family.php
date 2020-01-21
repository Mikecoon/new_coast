<?php
/* @var $this app\components\View */

use app\assets\SliderAsset;
use app\components\widgets\BookWidget\BookWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

SliderAsset::register($this);

$this->title = 'Развлечения для всей семьи';

$this->registerScssFile("/css/services/common.scss");
$this->registerScssFile("/css/services/family.scss");

$this->registerJsFile("/js/services/family.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="services-page">

    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Развлечения для всей семьи</h1>
                <div class="btn">Оставить заявку</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="grid">
            <a href="/services/wedding" style="background-image: url('/images/services/family/service-1.jpg')">
                <div class="title">Банный комплекс</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/banquet" style="background-image: url('/images/services/family/service-2.jpg')">
                <div class="title">SPA комплекс и бассейны</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/events" style="background-image: url('/images/services/family/service-3.jpg')">
                <div class="title">Детские развлечения</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/family" style="background-image: url('/images/services/family/service-4.jpg')">
                <div class="title">Анимация</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/family" style="background-image: url('/images/services/family/service-5.jpg')">
                <div class="title">Рестораны</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/family" style="background-image: url('/images/services/family/service-6.jpg')">
                <div class="title">Занятия спортом</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/family" style="background-image: url('/images/services/family/service-7.jpg')">
                <div class="title">Боулинг</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/family" style="background-image: url('/images/services/family/service-8.jpg')">
                <div class="title">Солярий</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/family" style="background-image: url('/images/services/family/service-9.jpg')"
               class="wide">
                <div class="title">Яхт-клуб</div>
                <div class="btn">Подробнее</div>
            </a>
        </div>

    </div>


    <div class="about">

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2>Семейный отдых
                        в Подмосковье</h2>

                    <p>
                        Выбирая, куда поехать провести выходные, отметить праздник или просто отдохнуть,
                        не забывайте про красивые места Пироговского водохранилища. Не только невысокие цены в
                        базах или домах отдыха в Подмосковье привлекают родителей с детьми (подростками или
                        первоклашками),
                        но и другие преимущества: отсуствие утомительных перелетов, акклиматизации, неприятных реакций
                        на экзотическую кухню и т.п.
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

    <?= CallbackWidget::widget() ?>
</div>