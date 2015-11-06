<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SOLUCIONSOLDOCUMENTO;

/**
 * SOLUCIONSOLDOCUMENTOSearch represents the model behind the search form about `app\models\SOLUCIONSOLDOCUMENTO`.
 */
class SOLUCIONSOLDOCUMENTOSearch extends SOLUCIONSOLDOCUMENTO
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SSD_ID', 'ESD_ID', 'SOL_ID'], 'integer'],
            [['USU_RUT', 'SSD_FECHAINICIO', 'SSD_FECHATERMINO'], 'safe'],
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
        $query = SOLUCIONSOLDOCUMENTO::find();

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
            'SSD_ID' => $this->SSD_ID,
            'ESD_ID' => $this->ESD_ID,
            'SOL_ID' => $this->SOL_ID,
            'SSD_FECHAINICIO' => $this->SSD_FECHAINICIO,
            'SSD_FECHATERMINO' => $this->SSD_FECHATERMINO,
        ]);

        $query->andFilterWhere(['like', 'USU_RUT', $this->USU_RUT]);

        return $dataProvider;
    }
}
