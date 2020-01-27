<?php
/**
 * @var $this app\components\View
 * @var $sales \app\models\Sales[];
 */


use app\components\widgets\CallbackWidget\CallbackWidget;

$this->title = 'Акции и скидки';

$this->registerScssFile("/css/sales/index.scss");

$this->registerJsFile("/js/sales/index.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="sales-index">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Акции и скидки</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid">
            <? foreach ($sales as $sale): ?>
                <a href="/sales/view?id=<?=$sale->id?>" style="background-image: url('<?=$sale->image?>')">

                    <div class="title"><?=$sale->title?></div>
                    <div class="description"><?=$sale->description?></div>

                    <div class="btn">Подробнее</div>

                </a>
            <? endforeach;?>
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