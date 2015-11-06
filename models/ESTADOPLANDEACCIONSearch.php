<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ESTADOPLANDEACCION;

/**
 * ESTADOPLANDEACCIONSearch represents the model behind the search form about `app\models\ESTADOPLANDEACCION`.
 */
class ESTADOPLANDEACCIONSearch extends ESTADOPLANDEACCION
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESP_ID'], 'integer'],
            [['ESP_DESCRIPCION'], 'safe'],
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
        $query = ESTADOPLANDEACCION::find();

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
            'ESP_ID' => $this->ESP_ID,
        ]);

        $query->andFilterWhere(['like', 'ESP_DESCRIPCION', $this->ESP_DESCRIPCION]);

        return $dataProvider;
    }
}
