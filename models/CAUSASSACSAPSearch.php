<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CAUSASSACSAP;

/**
 * CAUSASSACSAPSearch represents the model behind the search form about `app\models\CAUSASSACSAP`.
 */
class CAUSASSACSAPSearch extends CAUSASSACSAP
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CAU_ID', 'SAC_ID'], 'integer'],
            [['CAU_CAUSASIDENTIFICADAS'], 'safe'],
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
        $query = CAUSASSACSAP::find();

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
            'CAU_ID' => $this->CAU_ID,
            'SAC_ID' => $this->SAC_ID,
        ]);

        $query->andFilterWhere(['like', 'CAU_CAUSASIDENTIFICADAS', $this->CAU_CAUSASIDENTIFICADAS]);

        return $dataProvider;
    }
}
