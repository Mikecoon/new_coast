<?php

/**
 * @var $this \app\components\View
 */

use szaboolcs\recaptcha\InvisibleRecaptcha;
use yii\widgets\ActiveForm;
use app\models\ContactForm;

$model = new ContactForm();

?>

<div class="contact-form">



    <? $form = ActiveForm::begin([ 'id' => 'contact-form', 'action' => '/site/contact-form' ]);?>

    <div class="close"><img src="/images/site/icons/close.svg" alt=""></div>

    <div class="image"></div>
    <div class="fields">

        <h2>Перезвоните мне</h2>

        <?=$form->field($model, "name")->textInput(['placeholder' => $model->attributePlaceholders('name')])->label(false) ?>
        <?=$form->field($model, "phone")->textInput(['placeholder' => $model->attributePlaceholders('phone')])->label(false) ?>

        <?= InvisibleRecaptcha::widget([
            'name' => 'Заказать звонок',
            'formSelector' => '#contact-form',
            'btnClass' => '',
        ]);?>

        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

    </div>

    <div class="success">
        <h2>Благодарим за обращение!</h2>
        <p>Мы свяжемся с Вами в ближайшее время.</p>
    </div>

    <? ActiveForm::end(); ?>

</div>



