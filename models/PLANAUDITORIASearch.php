<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PLANAUDITORIA;

/**
 * PLANAUDITORIASearch represents the model behind the search form about `app\models\PLANAUDITORIA`.
 */
class PLANAUDITORIASearch extends PLANAUDITORIA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AAU_ID'], 'integer'],
            [['AAU_FECHAINICIO', 'AAU_FECHAEJECUCION', 'AAU_FECHACIERRE'], 'safe'],
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
        $query = PLANAUDITORIA::find();

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
            'AAU_ID' => $this->AAU_ID,
            'AAU_FECHAINICIO' => $this->AAU_FECHAINICIO,
            'AAU_FECHAEJECUCION' => $this->AAU_FECHAEJECUCION,
            'AAU_FECHACIERRE' => $this->AAU_FECHACIERRE,
        ]);

        return $dataProvider;
    }
}
