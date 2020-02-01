<?php

namespace app\models;

use Yii;
use app\components\Model;
use app\components\behaviors\FileBehavior;
/**
 * Модель для таблицы "banners".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $photo
 * @property string $link
 * @property integer $visible
 * @property integer $sort
 */
class Banners extends Model {

    /**
    * Название модели
    */
    public static $modelName = "Баннеры";

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'banners';
    }

    /**
    * @inheritdoc
    */
    public function behaviors() {
        return array_merge(parent::behaviors(), [
           'file' => [
                'class' => FileBehavior::className(),
                'attributes' => [
                     'photo' => ['type' => 'image', 'size' => [1440, 500]]
                ]
            ]
       ]);
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'description', 'link', 'visible', 'sort'], 'required'],
            [['visible', 'sort'], 'integer'],
            [['title', 'description', 'link'], 'string', 'max' => 255],
            [['photo'], 'image' , 'extensions' => ['jpg','jpeg','png']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'photo' => 'Фотография',
            'link' => 'Ссылка',
            'visible' => 'Отображать',
            'sort' => 'Сортировка',
        ];
    }
}
