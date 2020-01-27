<?php
/* @var $this app\components\View */

use app\components\widgets\CallbackWidget\CallbackWidget;

$this->title = 'Карта территории';

$this->registerScssFile("/css/site/map.scss");



?>

<div id="site-map">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Карта территории</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <img src="/images/site/map/map.jpg" alt="" class="main-image">
    </div>

    <?=CallbackWidget::widget()?>

</div>