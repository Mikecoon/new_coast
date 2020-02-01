<?php

namespace app\models;

use Yii;
use app\components\Model;
use app\components\behaviors\FileBehavior;
/**
 * Модель для таблицы "places_photos".
 *
 * @property integer $id
 * @property integer $place_id
 * @property integer $image
 * @property integer $sort
 */
class PlacesPhotos extends Model {

    /**
    * Название модели
    */
    public static $modelName = "Фотографии мест";

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'places_photos';
    }

    /**
    * @inheritdoc
    */
    public function behaviors() {
        return array_merge(parent::behaviors(), [
           'file' => [
                'class' => FileBehavior::className(),
                'attributes' => [
                     'image' => ['type' => 'image', 'size' => [560, 350]]
                ]
            ]
       ]);
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['place_id'], 'required'],
            [['place_id', 'sort'], 'integer'],
            [['image'], 'image' , 'extensions' => ['jpg','jpeg','png']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'place_id' => 'Место',
            'image' => 'Фотография',
            'sort' => 'Сортировка',
        ];
    }
}
