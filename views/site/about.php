<?php
/* @var $this app\components\View */

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
                <h1>Отель Яхт-клуб Новый Берег</h1>

                <p>Если вы планируете отдохнуть на выходные или праздники, провести торжество или корпоративное мероприятие — двери нашего отеля открыты для вас и ваших гостей,
                    а наш персонал радушно примет и обслужит вас.</p>
            </div>
        </div>
    </div>


    <?=BookWidget::widget()?>


    <div class="advantages">

        <div class="container">
            <h2>Почему нас выбирают</h2>

            <div class="grid">
                <div class="advantage">
                    <h3>Доступность</h3>

                    <div class="content">
                        Двери Отель – Яхт-клуба «Новый Берег» открыты для Гостей
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
                    <h3>Организация мероприятий</h3>

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
            <h2>Наши услуги</h2>

            <p>
                Шумный город, рабочие будни, занятые делами мысли, постоянный цейтнот — а так хочется отдохнуть,
                уехать, пусть даже на пару дней, в красивое место на природе, остановить эту постоянную суету,
                освободить мысли и, наконец, насладиться отдыхом! Мы приготовили уютные номера в
                нашем отеле, вкусные угощения и интересные мероприятия и развлечения.
            </p>

            <div id="services-slider">
                <a class="image" href="/services//events">
                    <div class="title">Конференции</div>
                    <img src="/images/site/about/services/1.jpg" alt="">
                </a>

                <a class="image" href="/services/banquet">
                    <div class="title">Банкеты</div>
                    <img src="/images/site/about/services/2.jpg" alt="">
                </a>

                <a class="image" href="/services/wedding">
                    <div class="title">Свадьбы</div>
                    <img src="/images/site/about/services/3.jpg" alt="">
                </a>

                <a class="image" href="/services/family">
                    <div class="title">Развлечения<br>для всей семьи</div>
                    <img src="/images/site/about/services/4.jpg" alt="">
                </a>

            </div>
        </div>


    </div>

    <div class="gallery">

        <div class="container">
            <h2>Фотогалерея</h2>

            <div id="albums-slider">
                <a class="image" href="#">
                    <div class="title">Территория отеля</div>
                    <img src="/images/site/about/services/1.jpg" alt="">
                </a>

                <a class="image" href="#">
                    <div class="title">Пляж</div>
                    <img src="/images/site/about/services/2.jpg" alt="">
                </a>

                <a class="image" href="#">
                    <div class="title">Яхт-клуб</div>
                    <img src="/images/site/about/services/3.jpg" alt="">
                </a>

                <a class="image" href="#">
                    <div class="title">Конференции</div>
                    <img src="/images/site/about/services/3.jpg" alt="">
                </a>

            </div>
        </div>


    </div>


    <?=CallbackWidget::widget()?>
</div>