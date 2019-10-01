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
 * @property string $formatted_phone
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
            [['name', 'email', 'phone', 'formatted_phone'], 'required'],
            [['phone'], 'string', 'max' => 20],
            [['email'], 'email'],
            [['formatted_phone'], 'string', 'max' => 20],
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
