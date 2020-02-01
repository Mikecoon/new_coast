<?php

namespace app\models;

use Yii;
use app\components\Model;
use app\components\behaviors\FileBehavior;
/**
 * Модель для таблицы "rooms_photos".
 *
 * @property integer $id
 * @property integer $room_id
 * @property integer $image
 * @property integer $sort
 */
class RoomsPhotos extends Model {

    /**
    * Название модели
    */
    public static $modelName = "Фотографии комнат";

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'rooms_photos';
    }

    /**
    * @inheritdoc
    */
    public function behaviors() {
        return array_merge(parent::behaviors(), [
           'file' => [
                'class' => FileBehavior::className(),
                'attributes' => [
                     'image' => ['type' => 'image', 'size' => [755, 400]]
                ]
            ]
       ]);
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['room_id'], 'required'],
            [['room_id', 'sort'], 'integer'],
            [['image'], 'image' , 'extensions' => ['jpg','jpeg','png']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'room_id' => 'Альбом',
            'image' => 'Фотография',
            'sort' => 'Сортировка',
        ];
    }
}
