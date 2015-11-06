<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SACSAPDIMENSION;

/**
 * SACSAPDIMENSIONSearch represents the model behind the search form about `app\models\SACSAPDIMENSION`.
 */
class SACSAPDIMENSIONSearch extends SACSAPDIMENSION
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SAC_ID', 'DIM_ID'], 'integer'],
            [['SSD_DIMENSION'], 'safe'],
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
        $query = SACSAPDIMENSION::find();

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
            'DIM_ID' => $this->DIM_ID,
        ]);

        $query->andFilterWhere(['like', 'SSD_DIMENSION', $this->SSD_DIMENSION]);

        return $dataProvider;
    }
}
