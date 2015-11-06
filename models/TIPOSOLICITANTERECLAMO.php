<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TIPO_SOLICITANTE_RECLAMO".
 *
 * @property integer $TSR_ID
 * @property string $TSR_TIPO
 */
class TIPOSOLICITANTERECLAMO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TIPO_SOLICITANTE_RECLAMO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TSR_ID'], 'required'],
            [['TSR_ID'], 'integer'],
            [['TSR_TIPO'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TSR_ID' => 'Tsr  ID',
            'TSR_TIPO' => 'Tsr  Tipo',
        ];
    }
}
