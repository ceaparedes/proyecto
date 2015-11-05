<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "HISTORIAL_ESTADOS".
 *
 * @property integer $HES_ID
 * @property integer $REC_NUMERO
 * @property integer $EST_ID
 * @property string $USU_RUT
 * @property string $HES_FECHAYHORA
 * @property string $HES_COMENTARIO
 */
class HISTORIAL_ESTADOS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'HISTORIAL_ESTADOS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HES_ID'], 'required'],
            [['HES_ID', 'REC_NUMERO', 'EST_ID'], 'integer'],
            [['USU_RUT', 'HES_COMENTARIO'], 'string'],
            [['HES_FECHAYHORA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HES_ID' => 'Hes  ID',
            'REC_NUMERO' => 'Rec  Numero',
            'EST_ID' => 'Est  ID',
            'USU_RUT' => 'Usu  Rut',
            'HES_FECHAYHORA' => 'Hes  Fechayhora',
            'HES_COMENTARIO' => 'Hes  Comentario',
        ];
    }
}
