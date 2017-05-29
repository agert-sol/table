<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "table".
 *
 * @property integer $id
 * @property integer $value
 */
class Table extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'integer', 'min' => 1, 'max' => 99999],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
        ];
    }
}
