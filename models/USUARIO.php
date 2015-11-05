<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USUARIO".
 *
 * @property string $USU_RUT
 */
class USUARIO extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'USUARIO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['USU_RUT'], 'required'],
            [['USU_RUT'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'USU_RUT' => 'Usu  Rut',
        ];
    }
}
