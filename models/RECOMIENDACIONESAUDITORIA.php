<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RECOMIENDACIONES_AUDITORIA".
 *
 * @property integer $REA_ID
 * @property integer $AUD_NUMERO
 * @property string $REA_DESCRIPCION
 */
class RECOMIENDACIONESAUDITORIA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RECOMIENDACIONES_AUDITORIA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['REA_ID', 'AUD_NUMERO'], 'required'],
            [['REA_ID', 'AUD_NUMERO'], 'integer'],
            [['REA_DESCRIPCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'REA_ID' => 'Rea  ID',
            'AUD_NUMERO' => 'Aud  Numero',
            'REA_DESCRIPCION' => 'Rea  Descripcion',
        ];
    }
}
