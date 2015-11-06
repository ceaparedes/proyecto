<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DOCUMENTO;

/**
 * DOCUMENTOSearch represents the model behind the search form about `app\models\DOCUMENTO`.
 */
class DOCUMENTOSearch extends DOCUMENTO
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DOC_CODIGO', 'ODO_ID', 'UOD_ID'], 'integer'],
            [['DOC_TITULO', 'DOC_TIPO'], 'safe'],
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
        $query = DOCUMENTO::find();

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
            'DOC_CODIGO' => $this->DOC_CODIGO,
            'ODO_ID' => $this->ODO_ID,
            'UOD_ID' => $this->UOD_ID,
        ]);

        $query->andFilterWhere(['like', 'DOC_TITULO', $this->DOC_TITULO])
            ->andFilterWhere(['like', 'DOC_TIPO', $this->DOC_TIPO]);

        return $dataProvider;
    }
}
