<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Places */

$this->title = $model->name(["ЕД", "ИМ"]);
?>
<div class="places-view">

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
                    'name',
                    'content:html',
                    [
                        'attribute' => 'is_banquet',
                        'value' => $model->is_banquet ? "Да" : "Нет"
                    ],
                    [
                        'attribute' => 'is_restaurant',
                        'value' => $model->is_restaurant ? "Да" : "Нет"
                    ],
                    [
                        'attribute' => 'is_events',
                        'value' => $model->is_events ? "Да" : "Нет"
                    ],

                    [
                        'attribute' => 'type',
                        'value' => \app\models\Places::$types[$model->type]
                    ],

                    [
                        'attribute' => 'capacity',
                        'format' => 'raw',
                        'value' => Html::tag('div', implode("", array_map(function ($value, $key) {
                            return Html::tag('div', Html::img("/images/services/events/scheme/".($key+1).".svg")
                                . Html::tag('span', $value, ['class' => 'm-l-30'])
                                , ['class' => 'col-md-2 text-center']);
                        }, json_decode($model->capacity),array_keys(json_decode($model->capacity)))), ['class' => 'row'])
                    ],
                    [
                        'attribute' => 'visible',
                        'value' => $model->visible ? "Да" : "Нет"
                    ],
                    'sort',
                    'menu_link',
                ],
            ]) ?>
        </div>
    </div>

    <h2>Фотографии</h2>

    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3 class="m-t-0">Загрузить  <span class="upload-data" style="display: none"><strong class="current"></strong>/ <strong class="all"></strong></span></h3>
                    <div class="upload-form">
                        <input type="file" multiple id="upload-file-input">
                    </div>

                    <div class="progress progress-striped active progress-bar-large" style="overflow: hidden; display: none;">
                        <div class="progress-bar progress-bar-success" data-transitiongoal="45" aria-valuenow="45" style="width: 0%;">Загрузка</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="photos-list">
        <? foreach ($model->photos as $photo): ?>
            <?=$this->render('_photo', ['model' => $photo])?>
        <? endforeach;?>
    </div>
</div>


<script>

    $(function(){

        $(".photos-list").sortable({
            stop: function() {

                var photos = $(".photos-list > .photo").map(function(i) {
                    return $(this).attr("data-id");
                });

                $.ajax({
                    url: "/admin/places-photos/order",
                    data: {ids: JSON.stringify(photos.toArray())}
                })
            }
        });

        window.setTimeout(function() {
            $("#upload-file-input").on("change", function() {

                var done = function() {
                    $("#upload-file-input").closest(".fileinput").toggle();
                    $(".upload-data").toggle();
                    $(".progress").toggle()
                        .find(".progress-bar").css("width", 0);
                };

                done();

                var files = this.files;
                var mimes = [
                    "image/jpg",
                    "image/png"
                ];
                var i = 0;

                $(".upload-data .current").html(i+1);
                $(".upload-data .all").html(files.length);

                var worker = function() {

                    var file = files.item(i);

                    if (mimes.indexOf(file.type) !== false) {

                        var data = new FormData();
                        data.append("PlacesPhotos[image]", file);
                        data.append("PlacesPhotos[place_id]", <?=$model->id?>);

                        $.ajax({
                            url: "/admin/places-photos/create",
                            processData: false,
                            contentType: false,
                            type: "post",
                            data: data,
                            success: function(response) {
                                i++;

                                $(".photos-list").append(response);
                                var percent = (100 / files.length)  * i;

                                $(".upload-data .current").html(i+1);
                                $(".upload-data .all").html(files.length);

                                $(".progress").find(".progress-bar").css("width", Math.ceil(percent)+"%");


                                if (files.length > i)
                                    worker();
                                else
                                    done();
                            }
                        })
                    } else {
                        i++;
                        if (files.length > i)
                            worker();
                        else
                            done();
                    }
                };

                worker();

            })
        }, 1000);


        $(".photos-list").on("click", ".photo .delete", function() {

            var photo = $(this).closest(".photo");
            var id = photo.data("id");

            yii.confirm("Удалить", function() {

                blockUI(photo);

                $.ajax({
                    url: "/admin/places-photos/delete?id=" + id,
                    type:"post",
                    success: function(){
                        photo.remove();
                    }
                })
            })
        })



    })

</script>
