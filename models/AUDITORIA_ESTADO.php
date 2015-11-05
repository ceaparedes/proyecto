<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "AUDITORIA_ESTADO".
 *
 * @property integer $AES_ID
 * @property string $AES_ESTADO
 */
class AUDITORIA_ESTADO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'AUDITORIA_ESTADO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AES_ID'], 'required'],
            [['AES_ID'], 'integer'],
            [['AES_ESTADO'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AES_ID' => 'Aes  ID',
            'AES_ESTADO' => 'Aes  Estado',
        ];
    }
}
