<?php
/* @var $this \app\components\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Settings;
use app\models\Users;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="/images/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?  ?>
    <?php $this->head() ?>
</head>
<body>


<?php $this->beginBody();?>

<header>
    <div class="links">
        <a href="#" class="menu-toggle">
            <?=file_get_contents(Yii::getAlias('@webroot/images/site/icons/menu.svg'))?> <span>Меню</span>
        </a>

        <a href="/map" class="map-link">
            <?=file_get_contents(Yii::getAlias('@webroot/images/site/icons/map.svg'))?> Карта территории
        </a>
    </div>

    <a href="/" class="logo">
        <img src="/images/site/logo.svg" alt="">
    </a>

    <div class="contacts">
        <div class="social">
            <a href="<?=Yii::$app->params['fb']?>" target="_blank"><img src="/images/site/icons/fb.svg" alt=""></a>
            <a href="<?=Yii::$app->params['vk']?>" target="_blank"><img src="/images/site/icons/vk.svg" alt=""></a>
            <a href="<?=Yii::$app->params['insta']?>" target="_blank"><img src="/images/site/icons/insta.svg" alt=""></a>
        </div>

        <div class="phone">
            <a href="tel:<?=Yii::$app->params['phone']?>" class="number"><?=Yii::$app->params['phone']?></a>
            <a href="/contacts" class="contact-info">КОНТАКТНАЯ ИНФОРМАЦИЯ</a>
        </div>

        <!--<a href="#" class="search-btn"><img src="/images/site/icons/search.svg" alt=""></a>-->

        <div class="book-btn"><img src="/images/site/icons/order.svg" alt="">Забронировать</div>
    </div>


</header>

<main>
    <?= $content ?>
</main>

<aside class="menu">

    <div class="column">
        <a href="/">Главная страница</a>
        <a href="/about">О нас</a>
        <a href="/rooms">Номера</a>
        <a href="/services">Организация мероприятий</a>
    </div>
    <div class="column">
        <a href="/schedule">Афиша мероприятий</a>
        <a href="/pricing">Цены</a>
        <a href="/sales">Скидки и акции</a>
        <a href="/albums">Фотогалерея</a>
    </div>
    <div class="column">
        <a href="/book">Бронирование</a>
        <a href="/map">Карта территории</a>
        <a href="/tour">3D-тур</a>
        <a href="/contacts">Контакты</a>
    </div>

</aside>

<?=$this->renderFile(Yii::getAlias("@app/views/site/_contact-form.php"))?>


<footer>
    <div class="container">
        <div class="content">

            <div class="column">
                <div class="title">Центр бронирования</div>
                <a href="tel:<?=Yii::$app->params['phone']?>" class="phone"><?=Yii::$app->params['phone']?></a>
                <a href="mailto:reception@grk-nb.com" class="email">reception@grk-nb.com</a>

                <p>Звоните круглосуточно<br/>
                    Мы работаем без выходных</p>
            </div>

            <div class="column">
                <div class="title">Организация мероприятий</div>
                <a href="tel:+79154827857" class="phone">+7 (915) 482-78-57</a>
                <a href="mailto:sale@grk-nb.com" class="email"><?=Yii::$app->params['email']?></a>
            </div>

            <div class="column">
                <div class="title">Наш адрес</div>
                <p>
                    Московская область, <br/>
                    Мытищинский район, д. Болтино,<br/>
                    ул. Верхняя прибрежная, вл. 10, тр. 1
                </p>
            </div>

            <div class="column">
                <div class="title">Социальные сети</div>

                <div class="social">
                    <a href="<?=Yii::$app->params['fb']?>" target="_blank">
                        <?=file_get_contents(Yii::getAlias('@webroot/images/site/icons/fb.svg'))?>
                    </a>
                    <a href="<?=Yii::$app->params['vk']?>" target="_blank">
                        <?=file_get_contents(Yii::getAlias('@webroot/images/site/icons/vk.svg'))?>
                    </a>
                    <a href="<?=Yii::$app->params['insta']?>" target="_blank">
                        <?=file_get_contents(Yii::getAlias('@webroot/images/site/icons/insta.svg'))?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-footer">
        <div class="container">
            <div class="sub-footer-content">
                <a href="#">Политика конфиденциальности</a>

                <p>&copy; 2019 Отель Отель Новый берег. Все права защищены.</p>

                <a href="http://ensolab.ru" target="_blank">Сделано в EnsoLab <img src="/images/site/ensolab.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter<?=Settings::get("yandex_counter");?> = new Ya.Metrika({
                    id:<?=Settings::get("yandex_counter");?>,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/34484650" style="position:absolute; left:-9999px;" alt="" /></div></noscript>


<!-- /Yandex.Metrika counter -->

<?php $this->endBody() ?>


</body>
</html>
<?php $this->endPage() ?>
