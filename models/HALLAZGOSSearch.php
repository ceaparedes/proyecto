<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HALLAZGOS;

/**
 * HALLAZGOSSearch represents the model behind the search form about `app\models\HALLAZGOS`.
 */
class HALLAZGOSSearch extends HALLAZGOS
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HAL_NUMERO', 'AUD_NUMERO'], 'integer'],
            [['HAL_TIPO', 'HAL_REQUISITO', 'HAL_DESCRIPCION'], 'safe'],
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
        $query = HALLAZGOS::find();

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
            'HAL_NUMERO' => $this->HAL_NUMERO,
            'AUD_NUMERO' => $this->AUD_NUMERO,
        ]);

        $query->andFilterWhere(['like', 'HAL_TIPO', $this->HAL_TIPO])
            ->andFilterWhere(['like', 'HAL_REQUISITO', $this->HAL_REQUISITO])
            ->andFilterWhere(['like', 'HAL_DESCRIPCION', $this->HAL_DESCRIPCION]);

        return $dataProvider;
    }
}
