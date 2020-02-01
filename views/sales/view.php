<?php
/**
 * @var $this app\components\View
 * @var $model \app\models\Events
 */

use app\components\widgets\CallbackWidget\CallbackWidget;

$this->title = $model->title;

$this->registerScssFile("/css/sales/view.scss");

$this->registerJsFile("/js/sales/view.js", [
    'depends' => \yii\web\JqueryAsset::class
]);

?>

<div id="sales-view">
    <div class="hero" style="background-image: url('<?=$model->banner?>')">
        <div class="container">
            <div class="content">
                <h1><?=$model->title?></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page-content">
            <?=$model->content?>
        </div>
    </div>

    <?=CallbackWidget::widget()?>
</div>