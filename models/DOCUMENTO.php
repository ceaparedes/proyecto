<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DOCUMENTO".
 *
 * @property integer $DOC_CODIGO
 * @property integer $ODO_ID
 * @property integer $UOD_ID
 * @property string $DOC_TITULO
 * @property string $DOC_TIPO
 */
class DOCUMENTO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'DOCUMENTO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DOC_CODIGO', 'ODO_ID', 'UOD_ID'], 'required'],
            [['DOC_CODIGO', 'ODO_ID', 'UOD_ID'], 'integer'],
            [['DOC_TITULO', 'DOC_TIPO'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DOC_CODIGO' => 'Doc  Codigo',
            'ODO_ID' => 'Odo  ID',
            'UOD_ID' => 'Uod  ID',
            'DOC_TITULO' => 'Doc  Titulo',
            'DOC_TIPO' => 'Doc  Tipo',
        ];
    }
}
