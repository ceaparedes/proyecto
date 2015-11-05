<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "AUDITORIA".
 *
 * @property integer $AUD_NUMERO
 * @property string $USU_RUT
 * @property integer $AES_ID
 * @property integer $AAU_ID
 * @property integer $DOC_CODIGO
 * @property integer $VER_ID
 * @property string $USU_USU_RUT
 * @property string $AUD_OBJETIVO
 * @property string $AUD_ALCANCE
 */
class AUDITORIA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'AUDITORIA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AUD_NUMERO', 'AES_ID', 'AAU_ID', 'DOC_CODIGO', 'VER_ID'], 'required'],
            [['AUD_NUMERO', 'AES_ID', 'AAU_ID', 'DOC_CODIGO', 'VER_ID'], 'integer'],
            [['USU_RUT', 'USU_USU_RUT', 'AUD_OBJETIVO', 'AUD_ALCANCE'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AUD_NUMERO' => 'Aud  Numero',
            'USU_RUT' => 'Usu  Rut',
            'AES_ID' => 'Aes  ID',
            'AAU_ID' => 'Aau  ID',
            'DOC_CODIGO' => 'Doc  Codigo',
            'VER_ID' => 'Ver  ID',
            'USU_USU_RUT' => 'Usu  Usu  Rut',
            'AUD_OBJETIVO' => 'Aud  Objetivo',
            'AUD_ALCANCE' => 'Aud  Alcance',
        ];
    }
}
