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
    public function showAreas(){
        return Yii::$app->db->createCommand("SELECT * from areas")->queryAll();
    }
    public function showArea($area){
        return Yii::$app->db->createCommand("SELECT * from areas where description_ru='" . $area)->queryAll();
    }
    public function showCities($areasRef){
        $sqlCity = "SELECT * from cities where area_ref='" . $areasRef . "'ORDER BY `cities`.`description_ru` ASC";
        return Yii::$app->db->createCommand($sqlCity)->queryAll();
    }
    public function showWarehouses($cityRef){
        $sqlWarehouse = "SELECT * from warehouses where city_ref='" . $cityRef . "'ORDER BY `warehouses`.`description_ru` ASC";
        return Yii::$app->db->createCommand($sqlWarehouse)->queryAll();
    }
    public function showClient($phone_raw)
    {
        return Yii::$app->db->createCommand("SELECT * FROM `clients` WHERE clients.phone_raw = $phone_raw")->queryAll();
    }
}