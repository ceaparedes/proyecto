<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SACSAP;

/**
 * SACSAPSearch represents the model behind the search form about `app\models\SACSAP`.
 */
class SACSAPSearch extends SACSAP
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SAC_ID', 'SST_ID', 'SOR_ID', 'HAL_NUMERO', 'SSO_ID'], 'integer'],
            [['USU_RUT', 'SAC_FECHA'], 'safe'],
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
        $query = SACSAP::find();

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
            'SAC_ID' => $this->SAC_ID,
            'SST_ID' => $this->SST_ID,
            'SOR_ID' => $this->SOR_ID,
            'HAL_NUMERO' => $this->HAL_NUMERO,
            'SSO_ID' => $this->SSO_ID,
            'SAC_FECHA' => $this->SAC_FECHA,
        ]);

        $query->andFilterWhere(['like', 'USU_RUT', $this->USU_RUT]);

        return $dataProvider;
    }
}
