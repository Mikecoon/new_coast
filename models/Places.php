<?php

namespace app\models;

use Yii;
use app\components\Model;

/**
 * Модель для таблицы "places".
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property string $hint
 * @property integer $is_banquet
 * @property integer $is_events
 * @property integer $is_restaurant
 * @property string $capacity
 * @property integer $type
 * @property integer $visible
 * @property integer $sort
 * @property string $menu_link
 */
class Places extends Model {

    /**
    * Название модели
    */
    public static $modelName = "Места";

    public static $types = [
        'conference' => 'Конференц-залы',
        'open' => 'Открытые площадки',
        'sport' => 'Спортивные площадки',
    ];

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'places';
    }

    /**
    * @inheritdoc
    */
    public function behaviors() {
        return array_merge(parent::behaviors(), [
       ]);
    }


    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'content', 'is_banquet', 'is_events', 'is_restaurant', 'capacity', 'visible'], 'required'],
            [['content', 'type'], 'string'],
            [['is_banquet', 'is_events', 'is_restaurant', 'visible', 'sort'], 'integer'],
            [['name', 'capacity'], 'string', 'max' => 50],
            [['hint'], 'string', 'max' => 200],
            [['menu_link'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'content' => 'Содержимое',
            'hint' => 'Подсказка',
            'is_banquet' => 'Показывать в Банкеты',
            'is_events' => 'Показывать в Корпоративные мероприятия',
            'is_restaurant' => 'Показывать в Рестораны',
            'capacity' => 'Рассадка',
            'type' => 'Тип в Корпоративных мероприятиях',
            'visible' => 'Отображать',
            'sort' => 'Сортировка',
            'menu_link' => 'Ссылка на меню',
        ];
    }

    public function getPhotos() {
        return $this->hasMany(PlacesPhotos::className(), ['place_id' => 'id'])->orderBy("sort desc");
    }
}
