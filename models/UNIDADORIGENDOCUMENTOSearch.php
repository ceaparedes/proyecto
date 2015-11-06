<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UNIDADORIGENDOCUMENTO;

/**
 * UNIDADORIGENDOCUMENTOSearch represents the model behind the search form about `app\models\UNIDADORIGENDOCUMENTO`.
 */
class UNIDADORIGENDOCUMENTOSearch extends UNIDADORIGENDOCUMENTO
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UOD_ID'], 'integer'],
            [['UOD_UNIDAD'], 'safe'],
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
        $query = UNIDADORIGENDOCUMENTO::find();

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
            'UOD_ID' => $this->UOD_ID,
        ]);

        $query->andFilterWhere(['like', 'UOD_UNIDAD', $this->UOD_UNIDAD]);

        return $dataProvider;
    }
}
