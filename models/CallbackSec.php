<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "callback".
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $phone
 * @property string $name
 * @property int $clear_phone
 * @property string $status
 */
class CallbackSec extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'callback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'phone', 'name', 'clear_phone'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['clear_phone'], 'integer'],
            [['phone'], 'string', 'max' => 15],
            [['name', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'phone' => 'Phone',
            'name' => 'Name',
            'clear_phone' => 'Clear Phone',
            'status' => 'Status',
        ];
    }
}
