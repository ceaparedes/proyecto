<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TIPO_DE_ACCION".
 *
 * @property integer $TDA_ID
 * @property string $TDA_ACCION
 * @property string $TDA_DESCRIPCION
 */
class TIPO_DE_ACCION extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TIPO_DE_ACCION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TDA_ID'], 'required'],
            [['TDA_ID'], 'integer'],
            [['TDA_ACCION', 'TDA_DESCRIPCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TDA_ID' => 'Tda  ID',
            'TDA_ACCION' => 'Tda  Accion',
            'TDA_DESCRIPCION' => 'Tda  Descripcion',
        ];
    }
}
