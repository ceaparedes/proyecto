<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DIMENSION".
 *
 * @property integer $DIM_ID
 * @property string $DIM_DESCRIPCION
 */
class DIMENSION extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'DIMENSION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DIM_ID'], 'required'],
            [['DIM_ID'], 'integer'],
            [['DIM_DESCRIPCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DIM_ID' => 'Dim  ID',
            'DIM_DESCRIPCION' => 'Dim  Descripcion',
        ];
    }
}
