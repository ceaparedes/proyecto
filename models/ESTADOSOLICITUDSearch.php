<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ESTADOSOLICITUD;

/**
 * ESTADOSOLICITUDSearch represents the model behind the search form about `app\models\ESTADOSOLICITUD`.
 */
class ESTADOSOLICITUDSearch extends ESTADOSOLICITUD
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESO_ID'], 'integer'],
            [['ESO_ESTADO', 'ESO_FECHA'], 'safe'],
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
        $query = ESTADOSOLICITUD::find();

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
            'ESO_ID' => $this->ESO_ID,
            'ESO_FECHA' => $this->ESO_FECHA,
        ]);

        $query->andFilterWhere(['like', 'ESO_ESTADO', $this->ESO_ESTADO]);

        return $dataProvider;
    }
}
