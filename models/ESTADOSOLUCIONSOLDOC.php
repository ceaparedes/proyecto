<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ESTADO_SOLUCION_SOL_DOC".
 *
 * @property integer $ESD_ID
 * @property string $ESD_DESCRIPCION
 */
class ESTADOSOLUCIONSOLDOC extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ESTADO_SOLUCION_SOL_DOC';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESD_ID'], 'required'],
            [['ESD_ID'], 'integer'],
            [['ESD_DESCRIPCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ESD_ID' => 'Esd  ID',
            'ESD_DESCRIPCION' => 'Esd  Descripcion',
        ];
    }
}
