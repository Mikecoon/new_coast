<?php
/**
 * @var $this app\components\View
 * @var $model \app\models\Articles
 * @var $articles \app\models\Articles[]
 */

use app\components\widgets\CallbackWidget\CallbackWidget;
use app\components\widgets\ArticlesSliderWidget\ArticlesSliderWidget;

$this->title = $model->title;

$this->registerScssFile("/css/articles/view.scss");


?>

<div id="articles-view">
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

    <?=ArticlesSliderWidget::widget(['links' => $articles, 'title' => 'Другая полезная информация'])?>

    <?=CallbackWidget::widget()?>
</div>