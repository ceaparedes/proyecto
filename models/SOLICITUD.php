<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SOLICITUD".
 *
 * @property integer $SOL_ID
 * @property integer $DOC_CODIGO
 * @property integer $VER_ID
 * @property integer $ESO_ID
 * @property string $USU_RUT
 * @property integer $OAC_ID
 * @property integer $TAC_ID
 * @property string $SOL_FECHA
 * @property string $SOL_UNIDAD
 * @property string $SOL_FUNDAMENTO
 */
class SOLICITUD extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SOLICITUD';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SOL_ID', 'USU_RUT', 'OAC_ID', 'TAC_ID'], 'required'],
            [['SOL_ID', 'DOC_CODIGO', 'VER_ID', 'ESO_ID', 'OAC_ID', 'TAC_ID'], 'integer'],
            [['USU_RUT', 'SOL_UNIDAD', 'SOL_FUNDAMENTO'], 'string'],
            [['SOL_FECHA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SOL_ID' => 'Sol  ID',
            'DOC_CODIGO' => 'Doc  Codigo',
            'VER_ID' => 'Ver  ID',
            'ESO_ID' => 'Eso  ID',
            'USU_RUT' => 'Usu  Rut',
            'OAC_ID' => 'Oac  ID',
            'TAC_ID' => 'Tac  ID',
            'SOL_FECHA' => 'Sol  Fecha',
            'SOL_UNIDAD' => 'Sol  Unidad',
            'SOL_FUNDAMENTO' => 'Sol  Fundamento',
        ];
    }
}
