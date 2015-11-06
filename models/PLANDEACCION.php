<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PLAN_DE_ACCION".
 *
 * @property integer $PDA_ID
 * @property integer $ESP_ID
 * @property integer $CAU_ID
 * @property string $USU_RUT
 * @property string $USU_USU_RUT
 * @property integer $TDA_ID
 * @property string $PDA_FECHA
 * @property string $PDA_FECHAIMPLEMENTACION
 * @property string $PDA_OBSERVACIONES
 */
class PLANDEACCION extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PLAN_DE_ACCION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PDA_ID', 'ESP_ID', 'TDA_ID'], 'required'],
            [['PDA_ID', 'ESP_ID', 'CAU_ID', 'TDA_ID'], 'integer'],
            [['USU_RUT', 'USU_USU_RUT', 'PDA_OBSERVACIONES'], 'string'],
            [['PDA_FECHA', 'PDA_FECHAIMPLEMENTACION'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PDA_ID' => 'Pda  ID',
            'ESP_ID' => 'Esp  ID',
            'CAU_ID' => 'Cau  ID',
            'USU_RUT' => 'Usu  Rut',
            'USU_USU_RUT' => 'Usu  Usu  Rut',
            'TDA_ID' => 'Tda  ID',
            'PDA_FECHA' => 'Pda  Fecha',
            'PDA_FECHAIMPLEMENTACION' => 'Pda  Fechaimplementacion',
            'PDA_OBSERVACIONES' => 'Pda  Observaciones',
        ];
    }
}
