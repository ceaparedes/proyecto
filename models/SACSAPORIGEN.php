<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SAC_SAP_ORIGEN".
 *
 * @property integer $SSO_ID
 * @property string $SSO_ORIGEN
 */
class SACSAPORIGEN extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SAC_SAP_ORIGEN';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SSO_ID'], 'required'],
            [['SSO_ID'], 'integer'],
            [['SSO_ORIGEN'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SSO_ID' => 'Sso  ID',
            'SSO_ORIGEN' => 'Sso  Origen',
        ];
    }
}
