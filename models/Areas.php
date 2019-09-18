<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "areas".
 *
 * @property string $ref
 * @property string $areas_center
 * @property string $description_ru
 */
class Areas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'areas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref', 'areas_center', 'description_ru'], 'required'],
            [['ref', 'areas_center', 'description_ru'], 'string', 'max' => 255],
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
            'areas_center' => 'Areas Center',
            'description_ru' => 'Description Ru',
        ];
    }
}
