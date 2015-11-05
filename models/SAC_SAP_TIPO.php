<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SAC_SAP_TIPO".
 *
 * @property integer $SST_ID
 * @property string $SST_TIPO
 */
class SAC_SAP_TIPO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SAC_SAP_TIPO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SST_ID'], 'required'],
            [['SST_ID'], 'integer'],
            [['SST_TIPO'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SST_ID' => 'Sst  ID',
            'SST_TIPO' => 'Sst  Tipo',
        ];
    }
}
