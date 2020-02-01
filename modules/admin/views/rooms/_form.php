<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rooms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rooms-form">

    <?php if (count($model->errors)): ?>
        <div class="alert alert-danger">
            <?php foreach($model->errors as $attr) echo implode("<br>", $attr); ?>
        </div>
    <? endif;?>
    <?php $form = ActiveForm::begin(['options' => ['class' => 'pjax-form', 'enctype' => 'multipart/form-data']]); ?>
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'capacity')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'square')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'booking_id')->textInput() ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'facilities', ['template' => '{label}{input}<p>Каждый элемент на новой строке</p>  {error}'])->textarea(['rows' => 20]) ?>
    <?= $form->field($model, 'start_price')->textInput() ?>
    <?= $form->field($model, 'banner')->fileInput() ?>
    <?= $form->field($model, 'sort')->textInput() ?>
    <?= $form->field($model, 'visible')->checkbox() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>