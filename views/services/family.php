<?php
/* @var $this app\components\View */

use app\assets\SliderAsset;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;
use app\components\widgets\BookWidget\BookWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;

SliderAsset::register($this);

$this->title = 'Развлечения для всей семьи';

$this->registerScssFile("/css/services/common.scss");
$this->registerScssFile("/css/services/family.scss");

$this->registerJsFile("/js/services/family.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

$entertainment = [
    [
        'title' => 'Банный комплекс',
        'link' => 'bath',
        'class' => ''
    ],
    [
        'title' => 'SPA комплекс и бассейны',
        'link' => 'spa',
        'class' => ''
    ],
    [
        'title' => 'Детские развлечения',
        'link' => 'children',
        'class' => ''
    ],
    [
        'title' => 'Анимация',
        'link' => 'animation',
        'class' => ''
    ],
    [
        'title' => 'Рестораны',
        'link' => 'restaurants',
        'class' => ''
    ],
    [
        'title' => 'Занятия спортом',
        'link' => 'sport',
        'class' => ''
    ],
    [
        'title' => 'Боулинг',
        'link' => 'bowling',
        'class' => ''
    ],
    [
        'title' => 'Солярий',
        'link' => 'solarium',
        'class' => ''
    ],
    [
        'title' => 'Яхт-клуб',
        'link' => 'yacht-club',
        'class' => 'wide'
    ],
];

?>

<div id="services-page">

    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Развлечения для всей семьи</h1>
                <div class="btn show-contact-modal">Оставить заявку</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="grid">

            <? foreach ($entertainment as $key => $service): ?>
                <a href="/entertainment/<?=$service['link']?>" style="background-image: url('/images/services/family/service-<?=$key + 1?>.jpg')" class="<?=$service['class']?>">
                    <div class="title"><?=$service['title']?></div>
                    <div class="btn">Подробнее</div>
                </a>
            <? endforeach; ?>
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
            'links' => $articles
        ]) ?>
    </div>

    <?= CallbackWidget::widget() ?>
</div>