<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DETALLE_CAMBIOS".
 *
 * @property integer $ACC_ID
 * @property integer $SOL_ID
 * @property string $ACC_CAMBIOS
 */
class DETALLECAMBIOS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'DETALLE_CAMBIOS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ACC_ID', 'SOL_ID'], 'required'],
            [['ACC_ID', 'SOL_ID'], 'integer'],
            [['ACC_CAMBIOS'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ACC_ID' => 'Acc  ID',
            'SOL_ID' => 'Sol  ID',
            'ACC_CAMBIOS' => 'Acc  Cambios',
        ];
    }
}
