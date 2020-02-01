<?php
/**
 * @var $this app\components\View
 * @var $banners \app\models\Banners[]
 */

use app\assets\DatepickerAsset;
use app\assets\SliderAsset;
use app\components\widgets\CallbackWidget\CallbackWidget;


DatepickerAsset::register($this);
SliderAsset::register($this);

$this->title = 'Главная страница';

$this->registerScssFile("/css/site/index.scss");

$this->registerJsFile("/js/site/index.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="index-page">

    <div class="hero">

        <div class="container">

            <div class="wrapper">
                <h1>Отель «Новый берег»</h1>

                <p>
                    Мы рады предложить Вам широкий спектр профессиональных услуг по организации
                    <a href="#">бизнес-мероприятий</a>, <a href="#">деловых встреч</a>, хранению и обслуживанию <a
                            href="#">водной техники</a>,
                    проведению <a href="#">корпоративных праздничных вечеров</a>, <a href="#">свадеб</a> и <a href="#">дней
                        рождений</a>.
                </p>

                <a class="btn" href="/about">Узнать об отеле больше</a>

                <form action="">
                    <div class="form-group">
                        <label for="index-form-arrival">Заезд</label>
                        <input type="text" id="index-form-arrival" name="arrival">

                        <img src="/images/site/icons/date-in.svg" alt="" class="icon">
                    </div>

                    <div class="form-group">
                        <label for="index-form-departure">Выезд</label>
                        <input type="text" id="index-form-departure" name="departure">
                        <img src="/images/site/icons/date-out.svg" alt="" class="icon">
                    </div>

                    <div class="form-group">
                        <label for="index-form-guests">Гости</label>
                        <input type="number" id="index-form-guests" name="guests">
                        <img src="/images/site/icons/guests.svg" alt="" class="icon">
                    </div>

                    <button type="submit">Найти номер</button>
                </form>
            </div>
        </div>
    </div>

    <div class="about-hotel">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <h1>Об отеле Новый Берег</h1>

                    <p>
<<<<<<< HEAD
                        Отель Яхт-клуб Новый Берег расположен в 9 км от Москвы на живописном берегу
                        Пироговского водохранилища - один из самых уютных, комфортабельных и гостеприимных
                        комплексов Подмосковья. Отель открыт для Гостей с различными интересами и представляет
                        собой идеальное место, где можно совместить бизнес с отдыхом на природе, уникальную площадку
                        для проведения банкетов, корпоративного отдыха и торжеств.
                    </p>

                    <ul>
                        <li>Отель — 58 уютных номеров различных категорий</li>
                        <li>СПА-комплекс с бассейном, сауной, хаммамом, джакузи</li>
                        <li>Банкетные залы, рестораны, BBQ беседки</li>
                        <li>Конференц-залы, переговорные комнаты</li>
                        <li>Пляж с летним бассейном</li>
                    </ul>
                    <p>Среди мероприятий, которые с неизменным успехом организует для своих Гостей Отель Новый Берег – это
                        банкеты и свадьбы на открытом воздухе, в шатрах с живописным видом на Пироговское водохранилище.
                        Банкетные площадки Отеля: летный шатер «Клешня» вместимостью до 250 человек, круглогодичный Малый
                        шатер до 90 человек и универсальный зал «Фрегат» до 350 человек.</p>
=======
                        Отель «Новый Берег» расположен на живописном берегу Пироговского водохранилища,
                        в 9 километрах от Москвы, располагает обустроенной автомобильной парковкой,
                        гостевым причалом для яхт и катеров, и мариной на 100 мест. К вашим услугам:
                    </p>

                    <ul>

                        <li>Отель — 57 уютных номеров различных категорий</li>
                        <li>СПА-комплекс с бассейном, сауной, хаммамом, джакузи</li>
                        <li>Конференц-залы, переговорные комнаты, банкетные залы</li>
                        <li>Пляж с летним бассейном и другими спортивно-развлекательными сооружениями</li>
                        <li>Яхт-клуб с эллингом и причальными сооружениями:
                            зимнее и летнее хранение судов, техническое обслуживание</li>
                    </ul>
>>>>>>> de80cc4f431a7e0b2b4d83a8e5541a8c09d6d7ec

                    <a href="/about" class="btn">Узнать больше</a>
                </div>
                <div class="col-md-6">
                    <div class="slider-wrapper">
                        <div class="slider" id="about-hotel-slider">
                            <div class="slide"><img src="/images/site/index/about-hotel-2.jpg" alt=""></div>
                            <div class="slide"><img src="/images/site/index/about-hotel-1.jpg" alt=""></div>
                            <div class="slide"><img src="/images/site/index/about-hotel-1.jpg" alt=""></div>
                            <div class="slide"><img src="/images/site/index/about-hotel-1.jpg" alt=""></div>
                            <div class="slide"><img src="/images/site/index/about-hotel-1.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="features-slider">

        <div id="features-slider">

            <? foreach ($banners as $banner): ?>
                <div class="slide" style="background-image: url('<?=$banner->photo?>')">
                    <div class="container">
                        <h2><?=$banner->title?></h2>

                        <p><?=$banner->description?></p>

                        <a href="<?=$banner->link?>" class="btn">Подробнее</a>
                    </div>
                </div>
            <? endforeach; ?>
        </div>

    </div>

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

    <?=CallbackWidget::widget()?>
</div>