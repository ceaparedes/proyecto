<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SAC_SAP".
 *
 * @property integer $SAC_ID
 * @property integer $SST_ID
 * @property string $USU_RUT
 * @property integer $SOR_ID
 * @property integer $HAL_NUMERO
 * @property integer $SSO_ID
 * @property string $SAC_FECHA
 */
class SACSAP extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SAC_SAP';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SAC_ID', 'SST_ID', 'USU_RUT', 'SSO_ID'], 'required'],
            [['SAC_ID', 'SST_ID', 'SOR_ID', 'HAL_NUMERO', 'SSO_ID'], 'integer'],
            [['USU_RUT'], 'string'],
            [['SAC_FECHA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SAC_ID' => 'Sac  ID',
            'SST_ID' => 'Sst  ID',
            'USU_RUT' => 'Usu  Rut',
            'SOR_ID' => 'Sor  ID',
            'HAL_NUMERO' => 'Hal  Numero',
            'SSO_ID' => 'Sso  ID',
            'SAC_FECHA' => 'Sac  Fecha',
        ];
    }
}
