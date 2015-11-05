<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ADJUNTOS;

/**
 * ADJUNTOSSearch represents the model behind the search form about `app\models\ADJUNTOS`.
 */
class ADJUNTOSSearch extends ADJUNTOS
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ADJ_ID', 'SOL_ID'], 'integer'],
            [['ADJ_URL'], 'safe'],
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
        $query = ADJUNTOS::find();

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
            'ADJ_ID' => $this->ADJ_ID,
            'SOL_ID' => $this->SOL_ID,
        ]);

        $query->andFilterWhere(['like', 'ADJ_URL', $this->ADJ_URL]);

        return $dataProvider;
    }
}
