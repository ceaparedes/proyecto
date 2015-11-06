<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PLANDEACCION;

/**
 * PLANDEACCIONSearch represents the model behind the search form about `app\models\PLANDEACCION`.
 */
class PLANDEACCIONSearch extends PLANDEACCION
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PDA_ID', 'ESP_ID', 'CAU_ID', 'TDA_ID'], 'integer'],
            [['USU_RUT', 'USU_USU_RUT', 'PDA_FECHA', 'PDA_FECHAIMPLEMENTACION', 'PDA_OBSERVACIONES'], 'safe'],
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
        $query = PLANDEACCION::find();

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
            'PDA_ID' => $this->PDA_ID,
            'ESP_ID' => $this->ESP_ID,
            'CAU_ID' => $this->CAU_ID,
            'TDA_ID' => $this->TDA_ID,
            'PDA_FECHA' => $this->PDA_FECHA,
            'PDA_FECHAIMPLEMENTACION' => $this->PDA_FECHAIMPLEMENTACION,
        ]);

        $query->andFilterWhere(['like', 'USU_RUT', $this->USU_RUT])
            ->andFilterWhere(['like', 'USU_USU_RUT', $this->USU_USU_RUT])
            ->andFilterWhere(['like', 'PDA_OBSERVACIONES', $this->PDA_OBSERVACIONES]);

        return $dataProvider;
    }
}
