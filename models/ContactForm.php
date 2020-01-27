<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model {

    public $name;
    public $phone;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            [['name', 'phone'], 'required'],
            [['phone', 'phone'], 'string'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
        ];
    }

    public function attributePlaceholders($name) {
        return [
            'name' => 'Введите Ваше имя',
            'phone' => '+7',
        ][$name];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email) {

        return Yii::$app->mailer->compose('contact-form', $this->attributes)
            ->setTo($email)
            ->setFrom('mikefinch@yandex.ru')
            ->setSubject('Заказ звонка с сайта Новый Берег')
            ->send();
    }
}
