<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RECLAMOSUGERENCIA;

/**
 * RECLAMOSUGERENCIASearch represents the model behind the search form about `app\models\RECLAMOSUGERENCIA`.
 */
class RECLAMOSUGERENCIASearch extends RECLAMOSUGERENCIA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['REC_NUMERO', 'EST_ID', 'TSR_ID', 'TIR_ID'], 'integer'],
            [['USU_RUT', 'REC_FECHA', 'REC_REPARTICION', 'REC_HORA', 'REC_MOTIVO', 'REC_VISTOBUENO'], 'safe'],
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
        $query = RECLAMOSUGERENCIA::find();

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
            'REC_NUMERO' => $this->REC_NUMERO,
            'EST_ID' => $this->EST_ID,
            'TSR_ID' => $this->TSR_ID,
            'TIR_ID' => $this->TIR_ID,
            'REC_FECHA' => $this->REC_FECHA,
            'REC_HORA' => $this->REC_HORA,
        ]);

        $query->andFilterWhere(['like', 'USU_RUT', $this->USU_RUT])
            ->andFilterWhere(['like', 'REC_REPARTICION', $this->REC_REPARTICION])
            ->andFilterWhere(['like', 'REC_MOTIVO', $this->REC_MOTIVO])
            ->andFilterWhere(['like', 'REC_VISTOBUENO', $this->REC_VISTOBUENO]);

        return $dataProvider;
    }
}
