<?php


namespace app\models;


use yii\base\Model;

class CallbackForm extends Model
{
    public $name;
    public $phone;

    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            ['phone', 'match', 'pattern' => '^\+?[38][-\(]?\d{3}\)?-?\d{3}-?\d{2}-?\d{2}$', 'message' => 'Телефон, должен быть в формате +38(XXX)XXX-XX-XX'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Полное имя',
            'phone' => 'Телефон',
        ];
    }
}