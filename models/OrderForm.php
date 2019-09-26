<?php


namespace app\models;


use yii\base\Model;

class OrderForm extends Model
{
    public $area;
    public $city;
    public $warehouse;
    public function rules()
    {
        return [
            
            [['area','city','warehouse'], 'string', 'max' => 255],
        ];
    }
}