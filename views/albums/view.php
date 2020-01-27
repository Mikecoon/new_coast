<?php
/**
 * @var $this \app\components\View
 * @var $model \app\models\Albums
 */

use app\assets\SliderAsset;
use app\components\widgets\CallbackWidget\CallbackWidget;

SliderAsset::register($this);

$this->title = $model->name;
$this->registerScssFile("/css/albums/view.scss");
$this->registerJsFile("/js/albums/view.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>


<div id="albums-view">
    <div class="hero" style='background-image: url("<?=$model->banner ? $model->banner : "/images/albums/index/hero.jpg" ?>")'>
        <div class="container">
            <div class="content">
                <h1><?=$this->title?></h1>
            </div>
        </div>
    </div>

    <div class="photos-slider-wrapper">
        <div class="photos" id="photos-slider">
            <? foreach ($model->photos as $photo): ?>
                <div class="slide"><img src="<?=$photo->image?>" alt=""></div>
            <? endforeach; ?>
        </div>

        <div class="customize-tools navigation">
            <ul class="thumbnails" id="customize-thumbnails">

                <? foreach ($model->photos as $photo): ?>
                    <li>
                        <img src="<?=$photo->image?>">
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>


    <?=CallbackWidget::widget()?>

</div>
