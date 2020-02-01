<?php
/**
 * @var $this app\components\View
 * @var $albums \app\models\Albums[]
 */

use app\assets\SliderAsset;
use app\components\widgets\CallbackWidget\CallbackWidget;
use app\components\widgets\BookWidget\BookWidget;

SliderAsset::register($this);

$this->title = 'Об отеле';

$this->registerScssFile("/css/site/about.scss");

$this->registerJsFile("/js/site/about.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="site-about">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Отель Новый Берег</h1>

                <p>Если вы планируете отдохнуть на выходные или праздники, провести торжество или корпоративное мероприятие — двери нашего отеля открыты для вас и ваших гостей,
                    а наш персонал радушно примет и обслужит вас.</p>
            </div>
        </div>
    </div>


    <?=BookWidget::widget()?>

<<<<<<< HEAD
    <div class="services" style="margin:50px 0 0">

        <div class="container">
            <p>Шумный город, рабочие будни, занятые делами мысли, постоянный цейтнот — а так хочется отдохнуть,
                уехать, пусть даже на пару дней, в красивое место на природе, остановить эту постоянную суету,
                освободить мысли и, наконец, насладиться отдыхом! Мы приготовили уютные номера в
                нашем отеле, вкусные угощения и интересные мероприятия и развлечения.
            </p>
        </div>
    </div>
=======

>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec
    <div class="advantages">

        <div class="container">
            <h2>Почему нас выбирают</h2>

            <div class="grid">
                <div class="advantage">
                    <h3>Доступность</h3>

                    <div class="content">
                        Двери Отеля «Новый Берег» открыты для Гостей
                        с самыми разнообразными интересами. Отель представляет собой
                        уникальную площадку для проведения банкетов, корпоративного отдыха,
                        торжеств, это идеальное место, где можно совместить бизнес с отдыхом
                        на природе или у бассейна.
                    </div>
                </div>
                <div class="advantage">
                    <h3>Расположение</h3>

                    <div class="content">
                        Отель расположен на живописном берегу Пироговского водохранилища, в 9-ми километрах от Москвы, располагает обустроенной автомобильной парковкой, гостевым причалом
                        для яхт и катеров и мариной на 100 мест.
                    </div>
                </div>
                <div class="advantage">
                    <h3>Активный отдых</h3>

                    <div class="content">
                        Для активного отдыха к услугам Гостей: боулинг, волейбольная площадка, аквапарк, бильярд, лодки, катамараны и яхта «Ангара».
                    </div>
                </div>
                <div class="advantage">
                    <h3>Семейный отдых</h3>

                    <div class="content">
                        У нас великолепные условия для семейного отдыха и отдыха
                        на воде — комфортные номера с видом на водохранилище, бассейны, сауна, русская баня, пляж. В Отеле все располагает
                        к незабываемому и приятному отдыху на природе.
                    </div>
                </div>
                <div class="advantage">
<<<<<<< HEAD
                    <h3>Банкетные площадки и шатры</h3>
=======
                    <h3>Организация мероприятий</h3>
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec

                    <div class="content">
                        Мы рады предложить Вам широкий спектр профессиональных услуг по организации бизнес-мероприятий, деловых встреч, хранению и обслуживанию водной техники, проведению корпоративных праздничных вечеров, свадеб под шатром
                        и дней рождений.
                    </div>
                </div>
                <div class="advantage">
                    <h3>Сотрудничество</h3>

                    <div class="content">
                        Приглашаем туристические агентства и корпоративных
                        клиентов для взаимовыгодного сотрудничества.
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="services">

        <div class="container">
<<<<<<< HEAD
            <h2>Дополнительные услуги отеля</h2>

            <div id="services-slider">
                <a class="image" href="/services/events">
                    <div class="title">Боулинг</div>
=======
            <h2>Наши услуги</h2>

            <p>
                Шумный город, рабочие будни, занятые делами мысли, постоянный цейтнот — а так хочется отдохнуть,
                уехать, пусть даже на пару дней, в красивое место на природе, остановить эту постоянную суету,
                освободить мысли и, наконец, насладиться отдыхом! Мы приготовили уютные номера в
                нашем отеле, вкусные угощения и интересные мероприятия и развлечения.
            </p>

            <div id="services-slider">
                <a class="image" href="/services/events">
                    <div class="title">Конференции</div>
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec
                    <img src="/images/site/about/services/1.jpg" alt="">
                </a>

                <a class="image" href="/services/banquet">
<<<<<<< HEAD
                    <div class="title">Банный комплекс</div>
=======
                    <div class="title">Банкеты</div>
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec
                    <img src="/images/site/about/services/2.jpg" alt="">
                </a>

                <a class="image" href="/services/wedding">
<<<<<<< HEAD
                    <div class="title">Бассейн</div>
=======
                    <div class="title">Свадьбы</div>
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec
                    <img src="/images/site/about/services/3.jpg" alt="">
                </a>

                <a class="image" href="/services/family">
<<<<<<< HEAD
                    <div class="title">СПА-комплекс</div>
                    <img src="/images/site/about/services/4.jpg" alt="">
                </a>

                <a class="image" href="/services/family">
                    <div class="title">Ресторан</div>
                    <img src="/images/site/about/services/4.jpg" alt="">
                </a>

                <a class="image" href="/services/family">
                    <div class="title">BBQ</div>
                    <img src="/images/site/about/services/4.jpg" alt="">
                </a>

                <a class="image" href="/services/family">
                    <div class="title">Беседки</div>
=======
                    <div class="title">Развлечения<br>для всей семьи</div>
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec
                    <img src="/images/site/about/services/4.jpg" alt="">
                </a>

            </div>
        </div>


    </div>

    <div class="gallery">

        <div class="container">
            <h2>Фотогалерея</h2>

            <div id="albums-slider">

                <? foreach ($albums as $album): ?>
                    <a class="image" href="/albums/view?id=<?=$album->id?>">
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


    <?=CallbackWidget::widget()?>
</div>