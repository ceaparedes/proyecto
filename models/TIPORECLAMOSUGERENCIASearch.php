<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TIPORECLAMOSUGERENCIA;

/**
 * TIPORECLAMOSUGERENCIASearch represents the model behind the search form about `app\models\TIPORECLAMOSUGERENCIA`.
 */
class TIPORECLAMOSUGERENCIASearch extends TIPORECLAMOSUGERENCIA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIR_ID'], 'integer'],
            [['TIR_DESCRIPCION'], 'safe'],
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
        $query = TIPORECLAMOSUGERENCIA::find();

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
            'TIR_ID' => $this->TIR_ID,
        ]);

        $query->andFilterWhere(['like', 'TIR_DESCRIPCION', $this->TIR_DESCRIPCION]);

        return $dataProvider;
    }
}
