<?php
/* @var $this app\components\View */

use app\assets\SliderAsset;
use app\components\widgets\BookWidget\BookWidget;
use app\components\widgets\CallbackWidget\CallbackWidget;

SliderAsset::register($this);

$this->title = 'Услуги';

$this->registerScssFile("/css/services/index.scss");

$this->registerJsFile("/js/services/index.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="services-index">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Услуги нашего дома отдыха</h1>
            </div>
        </div>
    </div>

    <?=BookWidget::widget()?>

    <div class="container">

        <div class="services">
            <a href="/services/wedding" style="background-image: url('/images/services/index/service-1.jpg')">
                <div class="title">Организация свадьбы</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/banquet" style="background-image: url('/images/services/index/service-2.jpg')">
                <div class="title">Банкетные залы</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/events" style="background-image: url('/images/services/index/service-3.jpg')">
                <div class="title">Корпоративные<br>
                    мероприятия</div>
                <div class="btn">Подробнее</div>
            </a>

            <a href="/services/family" style="background-image: url('/images/services/index/service-4.jpg')">
                <div class="title">Развлечения<br>
                    для всей семьи</div>
                <div class="btn">Подробнее</div>
            </a>
        </div>

        <div class="about">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <h2>Недорогой отдых<br>
                            в Подмосковье у воды</h2>

                        <p>
                            Планируя, как провести выходные или весело отметить праздники,
                            не переплачивая при этом, приезжайте к нам в «Новый Берег»!

                            <br><br>

                            Остановитесь в красивом месте в Московской области — в доме отдыха,
                            где в цену входят не только номер и парковка, но также СПА-комплекс с
                            бассейнами, настольный теннис и, в зависимости от вашего выбора,
                            питательные завтраки, обед и ужин.
                        </p>

                        <a href="#" class="read-more">Читать далее</a>

                        <p class="hidden">
                            Для семей с детьми, которые ищут недорогой вариант отдохнуть в ближнем Подмосковье,
                            мы подготовили не только уютные номера и вкусную кухню. У нас доступны детские и
                            взрослые развлечения, а чтобы по-настоящему насладиться небольшим отпуском у воды,
                            мы приглашаем вас на прогулку на катере!
                            <br> <br>
                            Ищите дом отдыха для двоих? Не нужно далеко ехать, ведь в ближнем Подмосковье в нашем
                            Отеле вы сможете провести время наедине, расслабиться в спа-комплексе,
                            отведать вкусных угощений в ресторане у воды или, если захочется чего-то более активного,
                            найти занятие по душе вам обоим из спектра развлечений, доступных здесь зимой и летом.
                            <br> <br>
                            Приезжайте к нам на выходные или на неделю! Даже целый отпуск здесь обойдется недорого!
                            Мы находимся всего в 9 км от столицы, в Болтино Московской области.
                        </p>

                    </div>
                    <div class="col-md-6">
                        <div class="image">
                            <img src="/images/services/index/about.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="useful-info">

            <div class="container">
                <h2>Полезная информация</h2>
                <div id="useful-slider">
                    <a class="image" href="#">
                        <div class="title">Эко-отель в Подмосковье</div>
                        <img src="/images/services/index/useful-template.jpg" alt="">
                    </a>

                    <a class="image" href="#">
                        <div class="title">Эко-отель в Подмосковье</div>
                        <img src="/images/services/index/useful-template.jpg" alt="">
                    </a>

                    <a class="image" href="#">
                        <div class="title">Эко-отель в Подмосковье</div>
                        <img src="/images/services/index/useful-template.jpg" alt="">
                    </a>

                    <a class="image" href="#">
                        <div class="title">Эко-отель в Подмосковье</div>
                        <img src="/images/services/index/useful-template.jpg" alt="">
                    </a>

                    <a class="image" href="#">
                        <div class="title">Эко-отель в Подмосковье</div>
                        <img src="/images/services/index/useful-template.jpg" alt="">
                    </a>
                </div>
            </div>


        </div>
    </div>


    <?=CallbackWidget::widget()?>
</div>