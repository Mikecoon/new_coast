<?php

/**
 * @var $this \app\components\View
 * @var $albums \app\models\Albums
 */


use app\assets\SliderAsset;

SliderAsset::register($this);

$this->title = 'Фотографии';

$this->registerScssFile("/css/albums/index.scss");

?>


<div id="albums-index">

    <div class="hero">
        <div class="container">
            <div class="content">
                <h1><?=$this->title?></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="albums">
            <? foreach ($albums as $album): ?>
                <a class="album" href="/albums/view?id=<?=$album->id?>">
                    <div class="title"><?=$album->name?></div>
                    <? if (count($album->photos)):?>
                        <img src="<?=$album->photos[0]->image?>" alt="">
                    <? else: ?>
                        <img src="/images/site/about/services/1.jpg" alt="">
                    <? endif?>
                </a>
            <? endforeach;?>
        </div>
    </div>
</div>
