<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HISTORIALESTADOS;

/**
 * HISTORIALESTADOSSearch represents the model behind the search form about `app\models\HISTORIALESTADOS`.
 */
class HISTORIALESTADOSSearch extends HISTORIALESTADOS
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HES_ID', 'REC_NUMERO', 'EST_ID'], 'integer'],
            [['USU_RUT', 'HES_FECHAYHORA', 'HES_COMENTARIO'], 'safe'],
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
        $query = HISTORIALESTADOS::find();

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
            'HES_ID' => $this->HES_ID,
            'REC_NUMERO' => $this->REC_NUMERO,
            'EST_ID' => $this->EST_ID,
            'HES_FECHAYHORA' => $this->HES_FECHAYHORA,
        ]);

        $query->andFilterWhere(['like', 'USU_RUT', $this->USU_RUT])
            ->andFilterWhere(['like', 'HES_COMENTARIO', $this->HES_COMENTARIO]);

        return $dataProvider;
    }
}
