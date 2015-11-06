<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TIPO_RECLAMO_SUGERENCIA".
 *
 * @property integer $TIR_ID
 * @property string $TIR_DESCRIPCION
 */
class TIPORECLAMOSUGERENCIA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TIPO_RECLAMO_SUGERENCIA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIR_ID'], 'required'],
            [['TIR_ID'], 'integer'],
            [['TIR_DESCRIPCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TIR_ID' => 'Tir  ID',
            'TIR_DESCRIPCION' => 'Tir  Descripcion',
        ];
    }
}
