<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $created_at
 * @property int $count
 * @property double $sum
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $area
 * @property string $city
 * @property string $warehouse
 *
 * @property OrderItems[] $orderItems
 */
class Orders extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //['name','required', 'message' => 'Укажите пожалуйста ваше имя'],
            //['email','required', 'message' => 'Укажите пожалуйста ваш E-mail'],
            //['phone','required', 'message' => 'Укажите пожалуйста ваш телефон'],
//            ['area','required', 'message' => 'Укажите пожалуйста вашу область'],
//            ['city','required', 'message' => 'Укажите пожалуйста ваш город'],
//            ['warehouse','required', 'message' => 'Укажите пожалуйста отделение Новой почты'],
            [['created_at'], 'safe'],
            [['count'], 'integer'],
            [['sum'], 'number'],
            //['email', 'email'],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
            [['area','city','warehouse'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
//            'name' => 'Полное имя',
//            'email' => 'Email',
//            'phone' => 'Телефон',
            'area' => 'Область',
            'city' => 'Город',
            'warehouse' => 'Выберите отделение новой почты',
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at','updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                // 'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }
}