<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ESTADO_RECLAMO_SUGERENCIA".
 *
 * @property integer $EST_ID
 * @property string $EST_DESCRIPCION
 */
class ESTADORECLAMOSUGERENCIA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ESTADO_RECLAMO_SUGERENCIA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EST_ID'], 'required'],
            [['EST_ID'], 'integer'],
            [['EST_DESCRIPCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EST_ID' => 'Est  ID',
            'EST_DESCRIPCION' => 'Est  Descripcion',
        ];
    }
}
