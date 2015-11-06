<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AUDITORIAESTADO;

/**
 * AUDITORIAESTADOSearch represents the model behind the search form about `app\models\AUDITORIAESTADO`.
 */
class AUDITORIAESTADOSearch extends AUDITORIAESTADO
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AES_ID'], 'integer'],
            [['AES_ESTADO'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AUDITORIAESTADO::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'AES_ID' => $this->AES_ID,
        ]);

        $query->andFilterWhere(['like', 'AES_ESTADO', $this->AES_ESTADO]);

        return $dataProvider;
    }
}
