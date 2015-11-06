<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PLAN_AUDITORIA".
 *
 * @property integer $AAU_ID
 * @property string $AAU_FECHAINICIO
 * @property string $AAU_FECHAEJECUCION
 * @property string $AAU_FECHACIERRE
 */
class PLANAUDITORIA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PLAN_AUDITORIA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AAU_ID'], 'required'],
            [['AAU_ID'], 'integer'],
            [['AAU_FECHAINICIO', 'AAU_FECHAEJECUCION', 'AAU_FECHACIERRE'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AAU_ID' => 'Aau  ID',
            'AAU_FECHAINICIO' => 'Aau  Fechainicio',
            'AAU_FECHAEJECUCION' => 'Aau  Fechaejecucion',
            'AAU_FECHACIERRE' => 'Aau  Fechacierre',
        ];
    }
}
