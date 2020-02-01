<?php

namespace app\models;

use app\components\behaviors\FileBehavior;
use Yii;
use app\components\Model;

/**
 * Модель для таблицы "rooms".
 *
 * @property integer $id
 * @property string $name
 * @property string $capacity
 * @property string $square
 * @property string $description
 * @property string $facilities
 * @property integer $start_price
 * @property integer $booking_id
 * @property string $banner
 * @property integer $sort
 * @property integer $visible
 */
class Rooms extends Model {

    /**
    * Название модели
    */
    public static $modelName = "Номера";

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'rooms';
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
            [['description', 'facilities'], 'string'],
            [['start_price', 'sort', 'visible', 'square', 'booking_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['capacity'], 'string', 'max' => 70],
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
            'booking_id' => 'ID Travel line',
            'capacity' => 'Количество гостей',
            'square' => 'Площадь',
            'description' => 'Описание',
            'facilities' => 'Удобства',
            'start_price' => 'Начальная цена',
            'banner' => 'Баннер',
            'sort' => 'Сортировка',
            'visible' => 'Отображать',
        ];
    }

    public function getPhotos() {
        return $this->hasMany(RoomsPhotos::className(), ['room_id' => 'id'])->orderBy("sort desc");
    }
}
