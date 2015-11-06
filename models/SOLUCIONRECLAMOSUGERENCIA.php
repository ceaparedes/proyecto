<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SOLUCION_RECLAMO_SUGERENCIA".
 *
 * @property integer $SOR_ID
 * @property string $USU_RUT
 * @property integer $REC_NUMERO
 * @property integer $ERS_ID
 * @property integer $SOR_PROCEDE
 * @property string $SOR_COMENTARIO
 * @property string $SOR_ANTECEDENTES
 * @property integer $SOR_ACUERDO
 * @property string $SOR_FECHA
 * @property string $SOR_RESULTADOS
 */
class SOLUCIONRECLAMOSUGERENCIA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SOLUCION_RECLAMO_SUGERENCIA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SOR_ID', 'USU_RUT', 'REC_NUMERO', 'ERS_ID'], 'required'],
            [['SOR_ID', 'REC_NUMERO', 'ERS_ID', 'SOR_PROCEDE', 'SOR_ACUERDO'], 'integer'],
            [['USU_RUT', 'SOR_COMENTARIO', 'SOR_ANTECEDENTES', 'SOR_RESULTADOS'], 'string'],
            [['SOR_FECHA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SOR_ID' => 'Sor  ID',
            'USU_RUT' => 'Usu  Rut',
            'REC_NUMERO' => 'Rec  Numero',
            'ERS_ID' => 'Ers  ID',
            'SOR_PROCEDE' => 'Sor  Procede',
            'SOR_COMENTARIO' => 'Sor  Comentario',
            'SOR_ANTECEDENTES' => 'Sor  Antecedentes',
            'SOR_ACUERDO' => 'Sor  Acuerdo',
            'SOR_FECHA' => 'Sor  Fecha',
            'SOR_RESULTADOS' => 'Sor  Resultados',
        ];
    }
}
