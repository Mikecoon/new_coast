<?php

namespace app\models;

use Yii;
use yii\base\Model;


class BookSearchForm extends Model {
    public $arrive;
    public $departure;
    public $guests;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            [['arrive', 'departure', 'guests'], 'required'],
            [['guests'], 'number', 'max' => 10, 'min' => 1],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'arrive' => 'Заезд',
            'departure' => 'Выезд',
            'guests' => 'Гости',
        ];
    }
}
