<?php

namespace app\models;

use Yii;
use app\components\Model;
use app\components\behaviors\FileBehavior;
/**
 * Модель для таблицы "sales".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $banner
 * @property string $content
 * @property string $date_create
 * @property integer $visible
 * @property integer $sort
 */
class Sales extends Model {

    /**
    * Название модели
    */
    public static $modelName = "Акции";

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'sales';
    }

    /**
    * @inheritdoc
    */
    public function behaviors() {
        return array_merge(parent::behaviors(), [
           'file' => [
                'class' => FileBehavior::className(),
                'attributes' => [
                     'image' => ['type' => 'image', 'size' => [370, 280]],
                     'banner' => ['type' => 'image', 'size' => [1440, 500]],
                ]
            ]
       ]);
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'content'], 'required'],
            [['content', 'description'], 'string'],
            [['date_create'], 'safe'],
            [['visible', 'sort'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['image', 'banner'], 'image' , 'extensions' => ['jpg','jpeg','png']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'description' => 'Краткое описание',
            'image' => 'Превью',
            'banner' => 'Баннер',
            'content' => 'Контент',
            'date_create' => 'Дата создания',
            'visible' => 'Отображать',
            'sort' => 'Сортировка',
        ];
    }
}
