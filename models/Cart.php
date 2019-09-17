<?php


namespace app\models;


use yii\base\Model;

class Cart extends Model
{
    public function addToCart($model, $count = 1)
    {
        if (isset($_SESSION['cart'][$model['id']])) {
            $_SESSION['cart'][$model['id']]['count'] += $count;
        } else {
            $_SESSION['cart'][$model['id']] = [
                'count' => $count,
                'name' => $model['name'],
                'price' => $model['price'],
                'countchange' => $count,
                'discount' => 0,
            ];
        }
        if($_SESSION['cart'][$model['id']]['count'] == 1){
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $count : $count;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $model['price'];
        }
        if ($_SESSION['cart'][$model['id']]['count'] == 2) {
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $count : $count;
            $_SESSION['cart'][$model['id']]['discount'] = 50;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $model['price']-$_SESSION['cart'][$model['id']]['discount'];
        } else if ($_SESSION['cart'][$model['id']]['count'] == 3) {
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $count : $count;
            $_SESSION['cart'][$model['id']]['discount'] = 150;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $model['price'] - $_SESSION['cart'][$model['id']]['discount'];
        }else if ($_SESSION['cart'][$model['id']]['count'] > 3){
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $count : $count;
            $_SESSION['cart'][$model['id']]['discount'] += 50;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $model['price'] - $_SESSION['cart'][$model['id']]['discount'];
        }
    }
}