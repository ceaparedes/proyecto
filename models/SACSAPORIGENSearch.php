<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SACSAPORIGEN;

/**
 * SACSAPORIGENSearch represents the model behind the search form about `app\models\SACSAPORIGEN`.
 */
class SACSAPORIGENSearch extends SACSAPORIGEN
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SSO_ID'], 'integer'],
            [['SSO_ORIGEN'], 'safe'],
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
        $query = SACSAPORIGEN::find();

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
            'SSO_ID' => $this->SSO_ID,
        ]);

        $query->andFilterWhere(['like', 'SSO_ORIGEN', $this->SSO_ORIGEN]);

        return $dataProvider;
    }
}
