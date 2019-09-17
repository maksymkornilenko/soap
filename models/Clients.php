<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property string $id
 * @property int $name
 * @property int $email
 * @property string $phone
 * @property string $phone_raw
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'phone_raw'], 'required'],
            [['name', 'email'], 'integer'],
            [['phone'], 'string', 'max' => 15],
            ['phone', 'match', 'pattern' => '/^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/', 'message' => 'Телефон, должно быть в формате 8(XXX)XXX-XX-XX'],
            [['phone_raw'], 'string', 'max' => 11],
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
