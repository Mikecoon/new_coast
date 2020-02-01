<?php
/**
 * Created by PhpStorm.
 * User: semok
 * Date: 24.08.2017
 * Time: 16:52
 *
 * @var $title string
 * @var $links \app\models\Articles[]
 */



?>
<div class="useful-info-widget">

    <div class="container">
        <h2><?=$title?></h2>
        <div class="slider">

            <? foreach ($links as $link): ?>
                <a class="image" href="/articles/view?id=<?=$link->id?>">
                    <div class="title"><?=$link->title?></div>
                    <img src="<?=$link->image?>" alt="<?=$link->title?>">
                </a>
            <? endforeach;?>

        </div>
    </div>


</div>