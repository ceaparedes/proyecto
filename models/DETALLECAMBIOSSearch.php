<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DETALLECAMBIOS;

/**
 * DETALLECAMBIOSSearch represents the model behind the search form about `app\models\DETALLECAMBIOS`.
 */
class DETALLECAMBIOSSearch extends DETALLECAMBIOS
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ACC_ID', 'SOL_ID'], 'integer'],
            [['ACC_CAMBIOS'], 'safe'],
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
        $query = DETALLECAMBIOS::find();

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
            'ACC_ID' => $this->ACC_ID,
            'SOL_ID' => $this->SOL_ID,
        ]);

        $query->andFilterWhere(['like', 'ACC_CAMBIOS', $this->ACC_CAMBIOS]);

        return $dataProvider;
    }
}
