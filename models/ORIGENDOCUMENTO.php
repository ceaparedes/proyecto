<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ORIGEN_DOCUMENTO".
 *
 * @property integer $ODO_ID
 * @property string $ODO_ORIGEN
 */
class ORIGENDOCUMENTO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ORIGEN_DOCUMENTO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ODO_ID'], 'required'],
            [['ODO_ID'], 'integer'],
            [['ODO_ORIGEN'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ODO_ID' => 'Odo  ID',
            'ODO_ORIGEN' => 'Odo  Origen',
        ];
    }
}
