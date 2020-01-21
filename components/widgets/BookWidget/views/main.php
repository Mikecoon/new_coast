<?php
/**
 * Created by PhpStorm.
 * User: semok
 * Date: 24.08.2017
 * Time: 16:52
 *
 * @var $model \app\models\BookSearchForm
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\assets\DatepickerAsset;

DatepickerAsset::register($this);

$icons = [
        '<img src="/images/site/icons/date-in.svg" alt="" class="icon">',
        '<img src="/images/site/icons/date-out.svg" alt="" class="icon">',
        '<img src="/images/site/icons/guests.svg" alt="" class="icon">',
];

$template = "{label}{input}{error}"

?>

<div class="book-widget">

    <div class="container">
        <div class="content">
            <h3>Забронировать номер</h3>

            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'arrive', ['template' => $template.$icons[0]])->textInput(['maxlength' => true, "autocomplete" => "false", 'class' => 'datepicker']) ?>
            <?= $form->field($model, 'departure', ['template' => $template.$icons[1]])->textInput(['maxlength' => true, "autocomplete" => "false", 'class' => 'datepicker']) ?>
            <?= $form->field($model, 'guests', ['template' => $template.$icons[2]])->textInput(['maxlength' => true, "autocomplete" => "false"]) ?>

            <?= Html::submitButton('Найти номер', ['class' =>'btn']) ?>


            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>


