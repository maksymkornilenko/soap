<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property string $id
 * @property int $created_at
 * @property int $updated_at
 * @property int $count
 * @property double $sum
 * @property string $client_id
 * @property string $area
 * @property string $city
 * @property string $warehouse
 * @property string $pay
 */
class Orders extends \yii\db\ActiveRecord
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
            [['created_at', 'updated_at', 'count', 'sum', 'client_id', 'area', 'city', 'warehouse', 'pay'], 'required'],
            [['created_at', 'updated_at', 'count', 'client_id'], 'integer'],
            [['sum'], 'number'],
            [['area', 'city', 'warehouse', 'pay'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'count' => 'Count',
            'sum' => 'Sum',
            'client_id' => 'Client ID',
            'area' => 'Area',
            'city' => 'City',
            'warehouse' => 'Warehouse',
            'pay' => 'Pay',
        ];
    }
}
