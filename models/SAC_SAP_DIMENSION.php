<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SAC_SAP_DIMENSION".
 *
 * @property integer $SAC_ID
 * @property integer $DIM_ID
 * @property string $SSD_DIMENSION
 */
class SAC_SAP_DIMENSION extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SAC_SAP_DIMENSION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SAC_ID', 'DIM_ID'], 'required'],
            [['SAC_ID', 'DIM_ID'], 'integer'],
            [['SSD_DIMENSION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SAC_ID' => 'Sac  ID',
            'DIM_ID' => 'Dim  ID',
            'SSD_DIMENSION' => 'Ssd  Dimension',
        ];
    }
}
