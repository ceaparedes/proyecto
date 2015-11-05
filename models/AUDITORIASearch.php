<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AUDITORIA;

/**
 * AUDITORIASearch represents the model behind the search form about `app\models\AUDITORIA`.
 */
class AUDITORIASearch extends AUDITORIA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AUD_NUMERO', 'AES_ID', 'AAU_ID', 'DOC_CODIGO', 'VER_ID'], 'integer'],
            [['USU_RUT', 'USU_USU_RUT', 'AUD_OBJETIVO', 'AUD_ALCANCE'], 'safe'],
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
        $query = AUDITORIA::find();

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
            'AUD_NUMERO' => $this->AUD_NUMERO,
            'AES_ID' => $this->AES_ID,
            'AAU_ID' => $this->AAU_ID,
            'DOC_CODIGO' => $this->DOC_CODIGO,
            'VER_ID' => $this->VER_ID,
        ]);

        $query->andFilterWhere(['like', 'USU_RUT', $this->USU_RUT])
            ->andFilterWhere(['like', 'USU_USU_RUT', $this->USU_USU_RUT])
            ->andFilterWhere(['like', 'AUD_OBJETIVO', $this->AUD_OBJETIVO])
            ->andFilterWhere(['like', 'AUD_ALCANCE', $this->AUD_ALCANCE]);

        return $dataProvider;
    }
}
