<?php
/* @var $this app\components\View */


use app\components\widgets\CallbackWidget\CallbackWidget;

$this->title = 'Акции и скидки';

$this->registerScssFile("/css/site/sales.scss");

$this->registerJsFile("/js/site/sales.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="site-sales">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Отель Яхт-клуб Новый Берег</h1>
            </div>
        </div>
    </div>


    <div class="container">

        <div class="grid">

            <a href="#" style="background-image: url('/images/site/sales/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/sales/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/sales/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/sales/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>

            <a href="#" style="background-image: url('/images/site/sales/template.jpg')">

                <div class="title">Ваш праздник в Новом Береге</div>
                <div class="description">Конференц зал в подарок, скидки на аренду банкетных залов до 50% и многое другое</div>

                <div class="btn">Подробнее</div>

            </a>


        </div>

    </div>

    <div class="about">

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2>Акции и скидки
                        на отдых в Подмосковье</h2>

                    <p>
                        Лучший отдых — это смена обстановки, смена деятельности! Когда мысли переключаются с
                        повседневных дел и забот на что-то новое и увлекательное — усталость уходит, а на
                        ее место приходят хорошее настроение и бодрость! Поэтому мы позаботились о том,
                        чтобы создать для наших гостей разнообразный досуг — подготовили спецпредложения,
                        скидки, акции — с ними отдых в нашем отеле в Подмосковье станет настоящей «перезагрузкой»!
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


    <?=CallbackWidget::widget()?>
</div>