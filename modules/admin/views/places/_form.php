<?php

/* @var $this yii\web\View */
/* @var $model app\models\Places */
/* @var $form yii\widgets\ActiveForm */

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$editorConfig = [
    'options' => ['rows' => 10],
    'preset' => 'full',
    'kcfinder' => true,
];

$capacity = json_decode($model->capacity);

if (!$capacity) $capacity = [0,0,0,0];

?>

<div class="places-form">

    <?php if (count($model->errors)): ?>
        <div class="alert alert-danger">
            <?php foreach($model->errors as $attr) echo implode("<br>", $attr); ?>
        </div>
    <? endif;?>
    <?php $form = ActiveForm::begin(['options' => ['class' => 'pjax-form', 'enctype' => 'multipart/form-data']]); ?>
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'content')->widget(CKEditor::className(), $editorConfig) ?>

    <label for="">Рассадка</label>
    <div class="row">

        <? foreach ($capacity as $key => $option): ?>
            <div class="col-md-1">
                <div class="form-group text-center">
                    <img src="/images/services/events/scheme/<?=$key + 1 ?>.svg" alt="" class="m-b-10">
                    <input type="text" class="form-control" value="<?=$capacity[$key]?>" name="Places[capacity][<?=$key?>]">
                </div>
            </div>
        <? endforeach;?>
    </div>

    <?= $form->field($model, 'menu_link')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'sort')->textInput() ?>
    <?= $form->field($model, 'is_banquet')->checkbox() ?>
    <?= $form->field($model, 'is_restaurant')->checkbox() ?>
    <?= $form->field($model, 'is_events')->checkbox() ?>
    <?= $form->field($model, 'type')->dropDownList(\app\models\Places::$types) ?>
    <?= $form->field($model, 'visible')->checkbox() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>