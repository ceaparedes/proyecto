<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ADJUNTOS".
 *
 * @property integer $ADJ_ID
 * @property integer $SOL_ID
 * @property string $ADJ_URL
 */
class ADJUNTOS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ADJUNTOS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ADJ_ID'], 'required'],
            [['ADJ_ID', 'SOL_ID'], 'integer'],
            [['ADJ_URL'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ADJ_ID' => 'Adj  ID',
            'SOL_ID' => 'Sol  ID',
            'ADJ_URL' => 'Adj  Url',
        ];
    }
}
