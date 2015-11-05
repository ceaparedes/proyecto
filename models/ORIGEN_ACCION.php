<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ORIGEN_ACCION".
 *
 * @property integer $OAC_ID
 * @property string $OAC_ORIGEN
 */
class ORIGEN_ACCION extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ORIGEN_ACCION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OAC_ID'], 'required'],
            [['OAC_ID'], 'integer'],
            [['OAC_ORIGEN'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OAC_ID' => 'Oac  ID',
            'OAC_ORIGEN' => 'Oac  Origen',
        ];
    }
}
