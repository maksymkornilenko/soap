<?php

namespace app\models\ext;

use app\models\Callback;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "callback".
 *
 * @property string $id
 * @property string $phone
 * @property string $name
 */
class ExtCallback extends Callback
{

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'phone' => 'Телефон',
            'name' => 'Полное имя',
        ];
    }
}
