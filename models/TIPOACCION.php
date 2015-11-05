<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TIPO_ACCION".
 *
 * @property integer $OAC_ID
 * @property integer $TAC_ID
 * @property string $TAC_ACCION
 */
class TIPO_ACCION extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TIPO_ACCION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OAC_ID', 'TAC_ID'], 'required'],
            [['OAC_ID', 'TAC_ID'], 'integer'],
            [['TAC_ACCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OAC_ID' => 'Oac  ID',
            'TAC_ID' => 'Tac  ID',
            'TAC_ACCION' => 'Tac  Accion',
        ];
    }
}
