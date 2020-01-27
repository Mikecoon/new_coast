<?php
/**
 * Created by PhpStorm.
 * User: semok
 * Date: 24.08.2017
 * Time: 16:52
 *
 * @var $photos string[]
 */

?>

<div class="photos-slider-widget">
    <div class="photos-slider-container">
        <? foreach ($photos as $photo): ?>
            <div class="photo"><img src="<?=$photo?>" alt=""></div>
        <? endforeach;?>
    </div>

</div>


