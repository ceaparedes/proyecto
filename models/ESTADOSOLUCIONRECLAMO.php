<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ESTADO_SOLUCION_RECALMO".
 *
 * @property integer $ERS_ID
 * @property string $ERS_ESTADO
 */
class ESTADOSOLUCIONRECLAMO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ESTADO_SOLUCION_RECLAMO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ERS_ID'], 'required'],
            [['ERS_ID'], 'integer'],
            [['ERS_ESTADO'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ERS_ID' => 'Ers  ID',
            'ERS_ESTADO' => 'Ers  Estado',
        ];
    }
}
