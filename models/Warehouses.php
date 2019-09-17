<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "warehouses".
 *
 * @property string $ref
 * @property int $number
 * @property string $city_ref
 * @property string $description_ua
 * @property string $description_ru
 */
class Warehouses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref', 'number', 'city_ref', 'description_ua', 'description_ru'], 'required'],
            [['number'], 'integer'],
            [['ref', 'city_ref', 'description_ua', 'description_ru'], 'string', 'max' => 255],
            [['ref'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ref' => 'Ref',
            'number' => 'Number',
            'city_ref' => 'City Ref',
            'description_ua' => 'Description Ua',
            'description_ru' => 'Description Ru',
        ];
    }
}
