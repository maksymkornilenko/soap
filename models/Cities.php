<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property string $ref
 * @property string $area_ref
 * @property string $description_ua
 * @property string $description_ru
 */
class Cities extends \yii\db\ActiveRecord
{
    public static function getDb() {
        return Yii::$app->get('dbNovaposhta');
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref', 'area_ref', 'description_ua', 'description_ru'], 'required'],
            [['ref', 'area_ref', 'description_ua', 'description_ru'], 'string', 'max' => 255],
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
            'area_ref' => 'Area Ref',
            'description_ua' => 'Description Ua',
            'description_ru' => 'Description Ru',
        ];
    }
}
