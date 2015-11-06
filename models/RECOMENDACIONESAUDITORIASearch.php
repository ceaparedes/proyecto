<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RECOMENDACIONESAUDITORIA;

/**
 * RECOMENDACIONESAUDITORIASearch represents the model behind the search form about `app\models\RECOMENDACIONESAUDITORIA`.
 */
class RECOMENDACIONESAUDITORIASearch extends RECOMENDACIONESAUDITORIA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['REA_ID', 'AUD_NUMERO'], 'integer'],
            [['REA_DESCRIPCION'], 'safe'],
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
        $query = RECOMENDACIONESAUDITORIA::find();

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
            'REA_ID' => $this->REA_ID,
            'AUD_NUMERO' => $this->AUD_NUMERO,
        ]);

        $query->andFilterWhere(['like', 'REA_DESCRIPCION', $this->REA_DESCRIPCION]);

        return $dataProvider;
    }
}
