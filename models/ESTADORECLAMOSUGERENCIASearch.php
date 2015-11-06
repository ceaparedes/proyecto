<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ESTADORECLAMOSUGERENCIA;

/**
 * ESTADORECLAMOSUGERENCIASearch represents the model behind the search form about `app\models\ESTADORECLAMOSUGERENCIA`.
 */
class ESTADORECLAMOSUGERENCIASearch extends ESTADORECLAMOSUGERENCIA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EST_ID'], 'integer'],
            [['EST_DESCRIPCION'], 'safe'],
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
        $query = ESTADORECLAMOSUGERENCIA::find();

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
            'EST_ID' => $this->EST_ID,
        ]);

        $query->andFilterWhere(['like', 'EST_DESCRIPCION', $this->EST_DESCRIPCION]);

        return $dataProvider;
    }
}
