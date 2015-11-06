<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SACSAPSOLUCION;

/**
 * SACSAPSOLUCIONSearch represents the model behind the search form about `app\models\SACSAPSOLUCION`.
 */
class SACSAPSOLUCIONSearch extends SACSAPSOLUCION
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SSS_ID', 'SAC_ID'], 'integer'],
            [['SSS_SOLUCION', 'SSS_FECHA'], 'safe'],
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
        $query = SACSAPSOLUCION::find();

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
            'SSS_ID' => $this->SSS_ID,
            'SAC_ID' => $this->SAC_ID,
            'SSS_FECHA' => $this->SSS_FECHA,
        ]);

        $query->andFilterWhere(['like', 'SSS_SOLUCION', $this->SSS_SOLUCION]);

        return $dataProvider;
    }
}
