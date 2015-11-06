<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TIPODEACCION;

/**
 * TIPODEACCIONSearch represents the model behind the search form about `app\models\TIPODEACCION`.
 */
class TIPODEACCIONSearch extends TIPODEACCION
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TDA_ID'], 'integer'],
            [['TDA_ACCION', 'TDA_DESCRIPCION'], 'safe'],
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
        $query = TIPODEACCION::find();

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
            'TDA_ID' => $this->TDA_ID,
        ]);

        $query->andFilterWhere(['like', 'TDA_ACCION', $this->TDA_ACCION])
            ->andFilterWhere(['like', 'TDA_DESCRIPCION', $this->TDA_DESCRIPCION]);

        return $dataProvider;
    }
}
