<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RECLAMO_SUGERENCIA".
 *
 * @property integer $REC_NUMERO
 * @property string $USU_RUT
 * @property integer $EST_ID
 * @property integer $TSR_ID
 * @property integer $TIR_ID
 * @property string $REC_FECHA
 * @property string $REC_REPARTICION
 * @property string $REC_HORA
 * @property string $REC_MOTIVO
 * @property string $REC_VISTOBUENO
 */
class RECLAMO_SUGERENCIA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RECLAMO_SUGERENCIA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['REC_NUMERO', 'TSR_ID', 'TIR_ID'], 'required'],
            [['REC_NUMERO', 'EST_ID', 'TSR_ID', 'TIR_ID'], 'integer'],
            [['USU_RUT', 'REC_REPARTICION', 'REC_MOTIVO', 'REC_VISTOBUENO'], 'string'],
            [['REC_FECHA', 'REC_HORA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'REC_NUMERO' => 'Rec  Numero',
            'USU_RUT' => 'Usu  Rut',
            'EST_ID' => 'Est  ID',
            'TSR_ID' => 'Tsr  ID',
            'TIR_ID' => 'Tir  ID',
            'REC_FECHA' => 'Rec  Fecha',
            'REC_REPARTICION' => 'Rec  Reparticion',
            'REC_HORA' => 'Rec  Hora',
            'REC_MOTIVO' => 'Rec  Motivo',
            'REC_VISTOBUENO' => 'Rec  Vistobueno',
        ];
    }
}
