<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CAUSAS_SAC_SAP".
 *
 * @property integer $CAU_ID
 * @property integer $SAC_ID
 * @property string $CAU_CAUSASIDENTIFICADAS
 */
class CAUSAS_SAC_SAP extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CAUSAS_SAC_SAP';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CAU_ID'], 'required'],
            [['CAU_ID', 'SAC_ID'], 'integer'],
            [['CAU_CAUSASIDENTIFICADAS'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CAU_ID' => 'Cau  ID',
            'SAC_ID' => 'Sac  ID',
            'CAU_CAUSASIDENTIFICADAS' => 'Cau  Causasidentificadas',
        ];
    }
}
