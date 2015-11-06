<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ESTADOSOLUCIONSOLDOC;

/**
 * ESTADOSOLUCIONSOLDOCSearch represents the model behind the search form about `app\models\ESTADOSOLUCIONSOLDOC`.
 */
class ESTADOSOLUCIONSOLDOCSearch extends ESTADOSOLUCIONSOLDOC
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESD_ID'], 'integer'],
            [['ESD_DESCRIPCION'], 'safe'],
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
        $query = ESTADOSOLUCIONSOLDOC::find();

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
            'ESD_ID' => $this->ESD_ID,
        ]);

        $query->andFilterWhere(['like', 'ESD_DESCRIPCION', $this->ESD_DESCRIPCION]);

        return $dataProvider;
    }
}
