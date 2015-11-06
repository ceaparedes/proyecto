<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SOLUCION_SOL_DOCUMENTO".
 *
 * @property integer $SSD_ID
 * @property string $USU_RUT
 * @property integer $ESD_ID
 * @property integer $SOL_ID
 * @property string $SSD_FECHAINICIO
 * @property string $SSD_FECHATERMINO
 */
class SOLUCIONSOLDOCUMENTO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SOLUCION_SOL_DOCUMENTO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SSD_ID', 'ESD_ID'], 'required'],
            [['SSD_ID', 'ESD_ID', 'SOL_ID'], 'integer'],
            [['USU_RUT'], 'string'],
            [['SSD_FECHAINICIO', 'SSD_FECHATERMINO'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SSD_ID' => 'Ssd  ID',
            'USU_RUT' => 'Usu  Rut',
            'ESD_ID' => 'Esd  ID',
            'SOL_ID' => 'Sol  ID',
            'SSD_FECHAINICIO' => 'Ssd  Fechainicio',
            'SSD_FECHATERMINO' => 'Ssd  Fechatermino',
        ];
    }
}
