<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "VERSION_DOCUMENTO".
 *
 * @property integer $DOC_CODIGO
 * @property integer $VER_ID
 * @property string $VER_DESCRIPCION
 * @property integer $VER_NUMEROCOPIA
 * @property string $VER_URL
 */
class VERSIONDOCUMENTO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'VERSION_DOCUMENTO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DOC_CODIGO', 'VER_ID'], 'required'],
            [['DOC_CODIGO', 'VER_ID', 'VER_NUMEROCOPIA'], 'integer'],
            [['VER_DESCRIPCION', 'VER_URL'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DOC_CODIGO' => 'Doc  Codigo',
            'VER_ID' => 'Ver  ID',
            'VER_DESCRIPCION' => 'Ver  Descripcion',
            'VER_NUMEROCOPIA' => 'Ver  Numerocopia',
            'VER_URL' => 'Ver  Url',
        ];
    }
}
