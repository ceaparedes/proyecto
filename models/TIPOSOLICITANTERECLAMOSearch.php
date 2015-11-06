<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TIPOSOLICITANTERECLAMO;

/**
 * TIPOSOLICITANTERECLAMOSearch represents the model behind the search form about `app\models\TIPOSOLICITANTERECLAMO`.
 */
class TIPOSOLICITANTERECLAMOSearch extends TIPOSOLICITANTERECLAMO
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TSR_ID'], 'integer'],
            [['TSR_TIPO'], 'safe'],
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
        $query = TIPOSOLICITANTERECLAMO::find();

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
            'TSR_ID' => $this->TSR_ID,
        ]);

        $query->andFilterWhere(['like', 'TSR_TIPO', $this->TSR_TIPO]);

        return $dataProvider;
    }
}
