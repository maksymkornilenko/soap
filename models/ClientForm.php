<?php


namespace app\models;


use yii\base\Model;

class ClientForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'phone_raw'], 'required'],
            [['phone'], 'string', 'max' => 15],
            [['email'], 'email'],
            ['phone', 'match', 'pattern' => '/^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/', 'message' => 'Телефон, должен быть в формате 8(XXX)XXX-XX-XX'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Полное имя',
            'email' => 'Email',
            'phone' => 'Телефон',
        ];
    }
}