<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "HISTORIAL_SOLICITUD".
 *
 * @property integer $HSO_ID
 * @property integer $ESO_ID
 * @property string $USU_RUT
 * @property integer $SOL_ID
 * @property string $HSO_FECHA
 * @property string $HSO_COMENTARIO
 */
class HISTORIALSOLICITUD extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'HISTORIAL_SOLICITUD';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HSO_ID'], 'required'],
            [['HSO_ID', 'ESO_ID', 'SOL_ID'], 'integer'],
            [['USU_RUT', 'HSO_COMENTARIO'], 'string'],
            [['HSO_FECHA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HSO_ID' => 'Hso  ID',
            'ESO_ID' => 'Eso  ID',
            'USU_RUT' => 'Usu  Rut',
            'SOL_ID' => 'Sol  ID',
            'HSO_FECHA' => 'Hso  Fecha',
            'HSO_COMENTARIO' => 'Hso  Comentario',
        ];
    }
}
