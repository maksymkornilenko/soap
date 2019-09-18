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
                'id'=>$model['id'],
                'count' => $count,
                'name' => $model['name'],
                'price' => $model['price'],
                'countchange' => $count,
                'discount' => 0,
            ];
        }
        if($_SESSION['cart'][$model['id']]['count'] == 1){
            $_SESSION['cart'][$model['id']]['discount'] = $model['price'];
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $count : $count;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $_SESSION['cart'][$model['id']]['discount'];
        }
        if ($_SESSION['cart'][$model['id']]['count'] == 2) {
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $count : $count;
            $_SESSION['cart'][$model['id']]['discount'] = 125;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $_SESSION['cart'][$model['id']]['discount'];
        } else if ($_SESSION['cart'][$model['id']]['count'] >= 3) {
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $count : $count;
            $_SESSION['cart'][$model['id']]['discount'] = 100;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $_SESSION['cart'][$model['id']]['discount'];
        }
    }
    public function removeFromCart($model, $count = 1)
    {

        if (isset($_SESSION['cart'][$model['id']])) {
            $_SESSION['cart'][$model['id']]['count'] -= $count;
        }
        if ($_SESSION['cart'][$model['id']]['count']==0){
            $this->recalc($model['id']);
        }
        if($_SESSION['cart'][$model['id']]['count'] == 1){
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] - $count : $count;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $model['price'];
        }
        if ($_SESSION['cart'][$model['id']]['count'] == 2) {
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] - $count : $count;
            $_SESSION['cart'][$model['id']]['discount'] = 125;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $_SESSION['cart'][$model['id']]['discount'];
        } else if ($_SESSION['cart'][$model['id']]['count'] >= 3) {
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] - $count : $count;
            $_SESSION['cart'][$model['id']]['discount'] = 100;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $_SESSION['cart'][$model['id']]['discount'];
        }
//        $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] - $count : $count;
//        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] - $count * $model['price'] : $count * $model['price'];
    }
    public function changeInCart($model, $count = 1)
    {

        if (isset($_SESSION['cart'][$model['id']])) {
            $_SESSION['cart'][$model['id']]['countchange'] = $count-$_SESSION['cart'][$model['id']]['count'];
            $_SESSION['cart'][$model['id']]['count']=$count;
        } else {
            $_SESSION['cart'][$model['id']] = [
                'id'=>$model['id'],
                'count' => $count,
                'name' => $model['name'],
                'price' => $model['price'],
                'countchange' => $count,
                'discount' => 0,
            ];
        }
        if($_SESSION['cart'][$model['id']]['count'] == 1){
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $_SESSION['cart'][$model['id']]['countchange'] : $count;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $model['price'];
        }
        if ($_SESSION['cart'][$model['id']]['count'] == 2) {
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $_SESSION['cart'][$model['id']]['countchange'] : $count;
            $_SESSION['cart'][$model['id']]['discount'] = 125;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $_SESSION['cart'][$model['id']]['discount'];
        } else if ($_SESSION['cart'][$model['id']]['count'] >= 3) {
            $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $_SESSION['cart'][$model['id']]['countchange'] : $count;
            $_SESSION['cart'][$model['id']]['discount'] = 100;
            $_SESSION['cart.sum'] = $_SESSION['cart.count'] * $_SESSION['cart'][$model['id']]['discount'];
        }
        //$_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $_SESSION['cart'][$model['id']]['countchange'] : $count;
        //$_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $_SESSION['cart'][$model['id']]['countchange']* $model['price'] : $count * $model['price'];
    }
    public function recalc($id)
    {
        if (!isset($_SESSION['cart'][$id])) return false;
        //$countMinus = $_SESSION['cart'][$id]['count'];
        //$sumMinus = $_SESSION['cart'][$id]['count'] * $_SESSION['cart'][$id]['price'];
        unset($_SESSION['cart.count']);
        unset($_SESSION['cart.sum']);
        unset($_SESSION['cart'][$id]);
    }
}