<?php
/**
 * Created by PhpStorm.
 * User: semok
 * Date: 24.08.2017
 * Time: 16:52
 *
 * @var $email string
 * @var $phone string
 */

?>

<div class="contacts-widget">

    <div class="container">
        <div class="contacts-widget-content">
            <h2>Оставьте заявку<br>
                удобным Вам способом</h2>

            <div class="links">
                <a href="tel:<?=$phone?>"><span><?=$phone?></span></a>
                <a href="mailto:<?=$email?>"><span><?=$email?></span></a>
            </div>
        </div>
    </div>

</div>


