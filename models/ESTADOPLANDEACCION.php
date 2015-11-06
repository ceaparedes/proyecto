<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ESTADO_PLAN_DE_ACCION".
 *
 * @property integer $ESP_ID
 * @property string $ESP_DESCRIPCION
 */
class ESTADOPLANDEACCION extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ESTADO_PLAN_DE_ACCION';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESP_ID'], 'required'],
            [['ESP_ID'], 'integer'],
            [['ESP_DESCRIPCION'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ESP_ID' => 'Esp  ID',
            'ESP_DESCRIPCION' => 'Esp  Descripcion',
        ];
    }
}
