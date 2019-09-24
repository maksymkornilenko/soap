<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property string $id
 * @property string $order_id
 * @property string $product_id
 * @property string $name
 * @property double $price
 * @property int $count_item
 * @property double $sum_item
 *
 * @property Orders $order
 * @property Products $product
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'name', 'price', 'count_item', 'sum_item'], 'required'],
            [['order_id', 'product_id', 'count_item'], 'integer'],
            [['price', 'sum_item'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'name' => 'Name',
            'price' => 'Price',
            'count_item' => 'Count Item',
            'sum_item' => 'Sum Item',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }
    public function saveOrderItems($items, $sum, $count, $order_id){
        foreach ($items as $id=>$item){
            $order_items= new OrderItems();
            $order_items->order_id=$order_id;
            $order_items->product_id=$item['id'];
            $order_items->name=$item['name'];
            $order_items->count_item=$count;
            if($count==1){
                $order_items->price=$item['price'];
            }else if($count==2){
                $order_items->price=125;
            }else if ($count>=3){
                $order_items->price=100;
            }else{
                $order_items->price=$item['price'];
            }
            $order_items->sum_item=$sum;
            $order_items->save();
        }

    }
}
