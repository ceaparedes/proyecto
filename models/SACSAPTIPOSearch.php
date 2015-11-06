<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SACSAPTIPO;

/**
 * SACSAPTIPOSearch represents the model behind the search form about `app\models\SACSAPTIPO`.
 */
class SACSAPTIPOSearch extends SACSAPTIPO
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SST_ID'], 'integer'],
            [['SST_TIPO'], 'safe'],
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
        $query = SACSAPTIPO::find();

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
            'SST_ID' => $this->SST_ID,
        ]);

        $query->andFilterWhere(['like', 'SST_TIPO', $this->SST_TIPO]);

        return $dataProvider;
    }
}
