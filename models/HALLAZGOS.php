<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "HALLAZGOS".
 *
 * @property integer $HAL_NUMERO
 * @property integer $AUD_NUMERO
 * @property string $HAL_TIPO
 * @property string $HAL_REQUISITO
 * @property string $HAL_DESCRIPCION
 */
class HALLAZGOS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'HALLAZGOS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HAL_NUMERO'], 'required'],
            [['HAL_NUMERO', 'AUD_NUMERO'], 'integer'],
            [['HAL_TIPO', 'HAL_REQUISITO', 'HAL_DESCRIPCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HAL_NUMERO' => 'Hal  Numero',
            'AUD_NUMERO' => 'Aud  Numero',
            'HAL_TIPO' => 'Hal  Tipo',
            'HAL_REQUISITO' => 'Hal  Requisito',
            'HAL_DESCRIPCION' => 'Hal  Descripcion',
        ];
    }
}
