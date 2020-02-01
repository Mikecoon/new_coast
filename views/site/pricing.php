<?php
/* @var $this app\components\View */

use app\assets\SliderAsset;
use app\components\widgets\CallbackWidget\CallbackWidget;
use app\components\widgets\BookWidget\BookWidget;


$this->title = 'Цены';

$this->registerScssFile("/css/site/pricing.scss");

$this->registerJsFile("/js/site/pricing.js", [
    'depends' => \yii\web\JqueryAsset::class
]);


?>

<div id="site-pricing">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1>Цены в отеле «Новый Берег»</h1>
            </div>
        </div>
    </div>


    <div class="container">

        <div class="tabs">
            <div class="tab active">Концеренц услуги</div>
            <div class="tab">Рестораны, банкетныеы залы</div>
            <div class="tab">Банный комплекс</div>
            <div class="tab">Дополнительные услуги</div>
        </div>

        <div class="tables">

            <div class="table active">
                <table>
                    <thead>
                        <tr>
                            <th>Название услуги</th>
                            <th>Единица измерения</th>
                            <th>Стоимость</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Конференц-зал "Саммит" (площадь 81м<sup>2</sup> / 60 мест), включая оснащение оборудованием</td>
                            <td>1 час</td>
                            <td><b>2 500 руб</b></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>2 часа</td>
                            <td><b>5 000 руб</b></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>8 часов</td>
                            <td><b>15 000 руб</b></td>
                        </tr>
                        <tr>
                            <td>Продление аренды свыше 8 часов</td>
                            <td>1 час</td>
                            <td><b>1 500 руб</b></td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <h3>Переговорные комнаты:</h3>
                            </td>
                        </tr>

                        <tr>
                            <td>"Сессия" (31 м<sup>2</sup> / 25 мест), включая флипчарт с блоком бумаги и маркерами</td>
                            <td>1 час</td>
                            <td><b>1000 руб</b></td>
                        </tr>
                        <tr>
                            <td>"Диалог" (38 м<sup>2</sup> / 30 мест), включая флипчарт с блоком бумаги и маркерами</td>
                            <td>1 час</td>
                            <td><b>1000 руб</b></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>Название услуги</th>
                        <th>Единица измерения</th>
                        <th>Стоимость</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td colspan="3">
                            <h3>Ресторан "Лагуна" (95 м<sup>2</sup> / 40 мест)</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Закрытие ресторана для частного пользования</td>
                        <td>1 час</td>
                        <td><b>5 000 руб</b></td>
                    </tr>

                    <tr>
                        <td>Банкетный зал ресторана (90 м<sup>2</sup> / 60 мест)</td>
                        <td>мероприятие</td>
                        <td><b>бесплатно</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <h3>"Малый Шатёр" в пляжной зоне отеля" (250 м<sup>2</sup> / 80 мест)</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Банкетное мероприятие (без звукового и светового оборудования)</td>
                        <td>6 часов</td>
                        <td><b>35 000</b></td>
                    </tr>
                    <tr>
                        <td>Банкетное мероприятие с собственным кейтерингом (согласуется заранее)</td>
                        <td>6 часов</td>
                        <td><b>150 000</b></td>
                    </tr>
                    <tr>
                        <td>Продление аренды</td>
                        <td>1 час</td>
                        <td><b>5 000</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <h3>Летнее кафе "Клешня" (450 м<sup>2</sup> / 250 мест)</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Банкетное мероприятие (без звукового и светового оборудования)</td>
                        <td>6 часов</td>
                        <td><b>50 000</b></td>
                    </tr>
                    <tr>
                        <td>Банкетное мероприятие с собственным кейтерингом (согласуется заранее)</td>
                        <td>6 часов</td>
                        <td><b>250 000</b></td>
                    </tr>
                    <tr>
                        <td>Продление аренды</td>
                        <td>1 час</td>
                        <td><b>8 000</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <h3>Бургер-бар "Парус" (100 м<sup>2</sup> / 45 мест)</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Банкетное мероприятие (без звукового и светового оборудования)</td>
                        <td>6 часов</td>
                        <td><b>35 000</b></td>
                    </tr>
                    <tr>
                        <td>Банкетное мероприятие с собственным кейтерингом (согласуется заранее)</td>
                        <td>6 часов</td>
                        <td><b>100 000</b></td>
                    </tr>

                    <tr>
                        <td><b>Барбекю беседка «Большая» (до 25 персон) включая уголь, розжиг, шампура</b></td>
                        <td>1 час</td>
                        <td><b>3 000</b></td>
                    </tr>

                    <tr>
                        <td><b>Барбекю беседка «Большая» (до 15 персон) включая уголь, розжиг, шампура</b></td>
                        <td>1 час</td>
                        <td><b>1 500</b></td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>Название услуги</th>
                        <th>Единица измерения</th>
                        <th>Стоимость</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td colspan="3">
                            <h3>Русская Баня на дровах</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Сеанс ежедневно</td>
                        <td>6 чел. / 1 час</td>
                        <td><b>3 000 руб</b></td>
                    </tr>

                    <tr>
                        <td>Аренда Банного комплекса</td>
                        <td>24 часа</td>
                        <td><b>45 000 руб</b></td>
                    </tr>

                    <tr>
                        <td>Дополнительное место</td>
                        <td>1 человек</td>
                        <td><b>500 руб</b></td>
                    </tr>

                    <tr>
                        <td>Полотенце</td>
                        <td>1 шт.</td>
                        <td><b>100 руб</b></td>
                    </tr>

                    <tr>
                        <td>Веник</td>
                        <td>1 шт.</td>
                        <td><b>300 руб</b></td>
                    </tr>

                    <tr>
                        <td>Дополнительная простынка</td>
                        <td>1 шт.</td>
                        <td><b>100 руб</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <h3>Бильярд</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Игра</td>
                        <td>1 час</td>
                        <td><b>500 руб</b></td>
                    </tr>



                    </tbody>
                </table>
            </div>

            <div class="table">
                <table>
                    <thead>
                    <tr>
                        <th>Название услуги</th>
                        <th>Единица измерения</th>
                        <th>Стоимость</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td colspan="3">
                            <h3>Боулинг (1 дорожка, поминутная тарификация)</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>14:00 – 18:00 /четверг/</td>
                        <td>1 час</td>
                        <td><b>500 руб</b></td>
                    </tr>

                    <tr>
                        <td>10:00 – 18:00 /воскресенье/</td>
                        <td>1 час</td>
                        <td><b>600 руб</b></td>
                    </tr>

                    <tr>
                        <td>18:00 – 22:00 /четверг, воскресенье/</td>
                        <td>1 час</td>
                        <td><b>900 руб</b></td>
                    </tr>

                    <tr>
                        <td>10:00 – 18:00 /пятница – суббота /</td>
                        <td>1 час</td>
                        <td><b>700 руб</b></td>
                    </tr>

                    <tr>
                        <td>18:00 – 22:00 /пятница – суббота/</td>
                        <td>1 час</td>
                        <td><b>900 руб</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <h3>Закрытый Бассейн с Сауной</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Посещение с 07:00 –до 23:00</td>
                        <td>1 чел./ 2 час</td>
                        <td><b>700 руб</b></td>
                    </tr>

                    <tr>
                        <td>Аренда Закрытого Бассейна с Сауной</td>
                        <td>1 час</td>
                        <td><b>3000 руб</b></td>
                    </tr>

                    <tr>
                        <td>Солярий</td>
                        <td>1 минута</td>
                        <td><b>20 руб</b></td>
                    </tr>

                    <tr>
                        <td>Бильярд</td>
                        <td>1 час</td>
                        <td><b>500 руб</b></td>
                    </tr>
                    <tr>
                        <td>Настольный теннис, включая инвентарь</td>
                        <td>1 час</td>
                        <td><b>200 руб</b></td>
                    </tr>

                    <tr>
                        <td>Настольный футбол / Кикер</td>
                        <td>1 час</td>
                        <td><b>200 руб</b></td>
                    </tr>

                    <tr>
                        <td>Прокат электромобиля (детский)</td>
                        <td>1 час</td>
                        <td><b>200 руб</b></td>
                    </tr>

                    <tr>
                        <td>Прокат велосипеда (взрослый, детский)</td>
                        <td>1 час</td>
                        <td><b>200 руб</b></td>
                    </tr>

                    <tr>
                        <td>Прокат роликовых коньков</td>
                        <td>1 час</td>
                        <td><b>150 руб</b></td>
                    </tr>

                    <tr>
                        <td>Прокат самоката (детский)</td>
                        <td>1 час</td>
                        <td><b>100 руб</b></td>
                    </tr>

                    <tr>
                        <td>Депозитная ячейка</td>
                        <td>1 сутки</td>
                        <td><b>100 руб</b></td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <h3>Факсимильная связь</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>Получение</td>
                        <td>1 страница</td>
                        <td><b>10 руб</b></td>
                    </tr>

                    <tr>
                        <td>Отправка по территории РФ</td>
                        <td>1 страница</td>
                        <td><b>10 руб</b></td>
                    </tr>
                    <tr>
                        <td>Отправка за границу РФ</td>
                        <td>1 страница</td>
                        <td><b>20 руб</b></td>
                    </tr>
                    <tr>
                        <td>Ксерокопия</td>
                        <td>1 страница</td>
                        <td><b>5 руб</b></td>
                    </tr>
                    <tr>
                        <td>Печать документа с электронного носителя</td>
                        <td>1 страница</td>
                        <td><b>10 руб</b></td>
                    </tr>

                    </tbody>
                </table>
            </div>


        </div>

    </div>

    <div class="contacts">

        <div class="container">
            <div class="content">
                <h2>Оставьте заявку<br>
                    удобным Вам способом</h2>
                
                <div class="links">
                    <a href="tel:+74959563774"><span>+ 7 (495) 956 37 74</span></a>
                    <a href="mailto:sale@grk-nb.com"><span>sale@grk-nb.com</span></a>
                </div>
            </div>
        </div>

    </div>

    <div class="about">

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2>Недорогой отдых<br>
                        в Подмосковье у воды</h2>

                    <p>
                        Если вы живете в столице, то выбраться на два дня с ночевкой,
                        провести время у воды, на свежем и богатом кислородом воздухе,
                        насладиться природой, разгрузиться от забот и зарядиться
                        позитивными впечатлениями — это необходимость, а не роскошь!
                        Провести выходные в доме отдыха в ближайшем Подмосковье можно
                        недорого: цены на проживание и услуги в нашем Отеле невысокие — как для бюджетной поездки, так и для беззаботного
                        отдыха «полный пансион».
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
                        <img src="/images/site/pricing/about.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>

    </div>

    <?= BookWidget::widget() ?>

</div>