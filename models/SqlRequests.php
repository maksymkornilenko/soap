<?php


namespace app\models;


use Yii;
use yii\base\Model;

class SqlRequests extends Model
{
    public function showCart($id)
    {
        return Yii::$app->db->createCommand("SELECT * FROM `products` WHERE id=$id")->queryAll();
    }
}