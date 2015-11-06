<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SOLICITUD;

/**
 * SOLICITUDSearch represents the model behind the search form about `app\models\SOLICITUD`.
 */
class SOLICITUDSearch extends SOLICITUD
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SOL_ID', 'DOC_CODIGO', 'VER_ID', 'ESO_ID', 'OAC_ID', 'TAC_ID'], 'integer'],
            [['USU_RUT', 'SOL_FECHA', 'SOL_UNIDAD', 'SOL_FUNDAMENTO'], 'safe'],
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
        $query = SOLICITUD::find();

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
            'SOL_ID' => $this->SOL_ID,
            'DOC_CODIGO' => $this->DOC_CODIGO,
            'VER_ID' => $this->VER_ID,
            'ESO_ID' => $this->ESO_ID,
            'OAC_ID' => $this->OAC_ID,
            'TAC_ID' => $this->TAC_ID,
            'SOL_FECHA' => $this->SOL_FECHA,
        ]);

        $query->andFilterWhere(['like', 'USU_RUT', $this->USU_RUT])
            ->andFilterWhere(['like', 'SOL_UNIDAD', $this->SOL_UNIDAD])
            ->andFilterWhere(['like', 'SOL_FUNDAMENTO', $this->SOL_FUNDAMENTO]);

        return $dataProvider;
    }
}
