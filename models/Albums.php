<?php

namespace app\models;

use app\components\behaviors\FileBehavior;
use Yii;
use app\components\Model;

/**
 * Модель для таблицы "albums".
 *
 * @property integer $id
 * @property string $name
 * @property integer $visible
 * @property string $banner
 * @property integer $sort
 */
class Albums extends Model {

    /**
    * Название модели
    */
    public static $modelName = "Фотоальбомы";

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'albums';
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return array_merge(parent::behaviors(), [
            'file' => [
                'class' => FileBehavior::className(),
                'attributes' => [
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
            [['name', 'visible'], 'required'],
            [['visible', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['banner'], 'image' , 'extensions' => ['jpg','jpeg','png']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'banner' => 'Баннер',
            'visible' => 'Показывать',
            'sort' => 'Сортировка',
        ];
    }

    public function getPhotos() {
        return $this->hasMany(AlbumsPhotos::className(), ['album_id' => 'id'])->orderBy("sort desc");
    }
}
