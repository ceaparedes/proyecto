<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ESTADO_SOLICITUD".
 *
 * @property integer $ESO_ID
 * @property string $ESO_ESTADO
 * @property string $ESO_FECHA
 */
class ESTADO_SOLICITUD extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ESTADO_SOLICITUD';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESO_ID'], 'required'],
            [['ESO_ID'], 'integer'],
            [['ESO_ESTADO'], 'string'],
            [['ESO_FECHA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ESO_ID' => 'Eso  ID',
            'ESO_ESTADO' => 'Eso  Estado',
            'ESO_FECHA' => 'Eso  Fecha',
        ];
    }
}
