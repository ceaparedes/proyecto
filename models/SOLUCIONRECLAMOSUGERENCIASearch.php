<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SOLUCIONRECLAMOSUGERENCIA;

/**
 * SOLUCIONRECLAMOSUGERENCIASearch represents the model behind the search form about `app\models\SOLUCIONRECLAMOSUGERENCIA`.
 */
class SOLUCIONRECLAMOSUGERENCIASearch extends SOLUCIONRECLAMOSUGERENCIA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SOR_ID', 'REC_NUMERO', 'ERS_ID', 'SOR_PROCEDE', 'SOR_ACUERDO'], 'integer'],
            [['USU_RUT', 'SOR_COMENTARIO', 'SOR_ANTECEDENTES', 'SOR_FECHA', 'SOR_RESULTADOS'], 'safe'],
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
        $query = SOLUCIONRECLAMOSUGERENCIA::find();

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
            'SOR_ID' => $this->SOR_ID,
            'REC_NUMERO' => $this->REC_NUMERO,
            'ERS_ID' => $this->ERS_ID,
            'SOR_PROCEDE' => $this->SOR_PROCEDE,
            'SOR_ACUERDO' => $this->SOR_ACUERDO,
            'SOR_FECHA' => $this->SOR_FECHA,
        ]);

        $query->andFilterWhere(['like', 'USU_RUT', $this->USU_RUT])
            ->andFilterWhere(['like', 'SOR_COMENTARIO', $this->SOR_COMENTARIO])
            ->andFilterWhere(['like', 'SOR_ANTECEDENTES', $this->SOR_ANTECEDENTES])
            ->andFilterWhere(['like', 'SOR_RESULTADOS', $this->SOR_RESULTADOS]);

        return $dataProvider;
    }
}
