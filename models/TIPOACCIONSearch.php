<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TIPOACCION;

/**
 * TIPOACCIONSearch represents the model behind the search form about `app\models\TIPOACCION`.
 */
class TIPOACCIONSearch extends TIPOACCION
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OAC_ID', 'TAC_ID'], 'integer'],
            [['TAC_ACCION'], 'safe'],
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
        $query = TIPOACCION::find();

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
            'OAC_ID' => $this->OAC_ID,
            'TAC_ID' => $this->TAC_ID,
        ]);

        $query->andFilterWhere(['like', 'TAC_ACCION', $this->TAC_ACCION]);

        return $dataProvider;
    }
}
