<?php

namespace app\models;

use Yii;
use app\components\Model;
use app\components\behaviors\FileBehavior;
/**
 * Модель для таблицы "albums_photos".
 *
 * @property integer $id
 * @property integer $album_id
 * @property integer $image
 * @property integer $sort
 */
class AlbumsPhotos extends Model {

    /**
    * Название модели
    */
    public static $modelName = "Фотографии";

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'albums_photos';
    }

    /**
    * @inheritdoc
    */
    public function behaviors() {
        return array_merge(parent::behaviors(), [
           'file' => [
                'class' => FileBehavior::className(),
                'attributes' => [
                     'image' => ['type' => 'image']
                ]
            ]
       ]);
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['album_id'], 'required'],
            [['album_id', 'sort'], 'integer'],
            [['image'], 'image' , 'extensions' => ['jpg','jpeg','png']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'album_id' => 'Альбом',
            'image' => 'Фотография',
            'sort' => 'Сортировка',
        ];
    }
}
