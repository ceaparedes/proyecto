<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SAC_SAP_SOLUCION".
 *
 * @property integer $SSS_ID
 * @property integer $SAC_ID
 * @property string $SSS_SOLUCION
 * @property string $SSS_FECHA
 */
class SACSAPSOLUCION extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SAC_SAP_SOLUCION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SSS_ID'], 'required'],
            [['SSS_ID', 'SAC_ID'], 'integer'],
            [['SSS_SOLUCION'], 'string'],
            [['SSS_FECHA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SSS_ID' => 'Sss  ID',
            'SAC_ID' => 'Sac  ID',
            'SSS_SOLUCION' => 'Sss  Solucion',
            'SSS_FECHA' => 'Sss  Fecha',
        ];
    }
}
