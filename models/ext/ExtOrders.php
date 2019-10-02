<?php

namespace app\models\ext;


use app\models\Orders;

/**
 * This is the model class for table "orders".
 *

 */
class ExtOrders extends Orders
{
    const ANSWER_SUCCESS = 'Спасибо Ваш заказ принят, менеджер в скором времени свяжется с вами.';
    const ANSWER_ERROR = 'Ошибка при получении данных';

    public static function factory()
    {
        return new ExtOrders();
    }

    public function attributeLabels()
    {
        return [
            'area' => 'Область',
            'city' => 'Город',
            'warehouse' => 'Выберите отделение новой почты',
        ];
    }

    public function getPriceByCount($count)
    {
        $price = 150;
        if ($count == 2) {
            $price = 125;
        } else if ($count >= 3) {
            $price = 100;
        }
        return $price;
    }
}