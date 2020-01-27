<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Events */

$this->title = $model->name(["ЕД", "ИМ"]);
?>
<div class="events-view">

    <h2><?= Html::encode($this->title) ?> #<strong><?= $model->id ?></strong></h2>

    <div class="panel">
        <div class="panel-body">
            <div class="pull-right t-right">
                Дата создания: <strong><?= $model->getCreateDate("d MMMM y H:mm"); ?></strong> <br>
                <a href="<?= Url::toRoute(['log', 'id' => $model->id]) ?>">История изменений</a>
            </div>

            <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Вы действительно хотите удалить этот элемент',
                    'method' => 'post',
                    'pjax' => '0',
                ],
            ]) ?>

            <?= DetailView::widget([
                'model' => $model,
                'options' => ['class' => "table table-striped"],
                'attributes' => [
                    'id',
                    'title',
                    'image:image',
                    [
                            'attribute' => 'banner',
                        'format' => 'raw',
                        'value' => "<img src='{$model->banner}' style='max-width: 100%'>"
                    ],
                    'content:html',
                    'date_create',
                    [
                        'attribute' => 'visible',
                        'value' => $model->visible ? 'Да' : 'Нет'
                    ],
                    'sort',
                ],
            ]) ?>
        </div>
    </div>
</div>
