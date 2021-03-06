<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */

$editorConfig = [
    'options' => ['rows' => 10],
    'preset' => 'full',
    'kcfinder' => true,
];

?>

<div class="events-form">

    <?php if (count($model->errors)): ?>
        <div class="alert alert-danger">
            <?php foreach($model->errors as $attr) echo implode("<br>", $attr); ?>
        </div>
    <? endif;?>
    <?php $form = ActiveForm::begin(['options' => ['class' => 'pjax-form', 'enctype' => 'multipart/form-data']]); ?>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'banner')->fileInput() ?>
    <?= $form->field($model, 'content')->widget(CKEditor::className(), $editorConfig) ?>
    <?= $form->field($model, 'sort')->textInput() ?>
    <?= $form->field($model, 'visible')->checkbox() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>