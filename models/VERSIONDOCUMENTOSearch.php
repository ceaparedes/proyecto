<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VERSIONDOCUMENTO;

/**
 * VERSIONDOCUMENTOSearch represents the model behind the search form about `app\models\VERSIONDOCUMENTO`.
 */
class VERSIONDOCUMENTOSearch extends VERSIONDOCUMENTO
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DOC_CODIGO', 'VER_ID', 'VER_NUMEROCOPIA'], 'integer'],
            [['VER_DESCRIPCION', 'VER_URL'], 'safe'],
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
        $query = VERSIONDOCUMENTO::find();

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
            'VER_ID' => $this->VER_ID,
            'VER_NUMEROCOPIA' => $this->VER_NUMEROCOPIA,
        ]);

        $query->andFilterWhere(['like', 'VER_DESCRIPCION', $this->VER_DESCRIPCION])
            ->andFilterWhere(['like', 'VER_URL', $this->VER_URL]);

        return $dataProvider;
    }
}
