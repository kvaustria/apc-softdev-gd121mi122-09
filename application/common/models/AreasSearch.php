<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Areas;

/**
 * AreasSearch represents the model behind the search form about `common\models\Areas`.
 */
class AreasSearch extends Areas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_id'], 'integer'],
            [['NCR', 'ISABELA', 'CAR', 'PANGASINAN', 'ZAMBALES', 'NUEVA_ECIJA', 'TARLAC', 'PAMPANGA', 'BULACAN', 'CAVITE', 'LAGUNA', 'BATANGAS', 'QUEZON', 'CAMARINES SUR', 'NEGROS_OCCIDENTAL', 'ILOILO', 'CEBU', 'LEYTE', 'PALAWAN', 'DAVAO', 'SOUTH_COTABATO', 'MISAMIS_ORIENTAL'], 'safe'],
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
        $query = Areas::find();

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
            'area_id' => $this->area_id,
        ]);

        $query->andFilterWhere(['like', 'NCR', $this->NCR])
            ->andFilterWhere(['like', 'ISABELA', $this->ISABELA])
            ->andFilterWhere(['like', 'CAR', $this->CAR])
            ->andFilterWhere(['like', 'PANGASINAN', $this->PANGASINAN])
            ->andFilterWhere(['like', 'ZAMBALES', $this->ZAMBALES])
            ->andFilterWhere(['like', 'NUEVA_ECIJA', $this->NUEVA_ECIJA])
            ->andFilterWhere(['like', 'TARLAC', $this->TARLAC])
            ->andFilterWhere(['like', 'PAMPANGA', $this->PAMPANGA])
            ->andFilterWhere(['like', 'BULACAN', $this->BULACAN])
            ->andFilterWhere(['like', 'CAVITE', $this->CAVITE])
            ->andFilterWhere(['like', 'LAGUNA', $this->LAGUNA])
            ->andFilterWhere(['like', 'BATANGAS', $this->BATANGAS])
            ->andFilterWhere(['like', 'QUEZON', $this->QUEZON])
            ->andFilterWhere(['like', 'CAMARINES SUR', $this->CAMARINES SUR])
            ->andFilterWhere(['like', 'NEGROS_OCCIDENTAL', $this->NEGROS_OCCIDENTAL])
            ->andFilterWhere(['like', 'ILOILO', $this->ILOILO])
            ->andFilterWhere(['like', 'CEBU', $this->CEBU])
            ->andFilterWhere(['like', 'LEYTE', $this->LEYTE])
            ->andFilterWhere(['like', 'PALAWAN', $this->PALAWAN])
            ->andFilterWhere(['like', 'DAVAO', $this->DAVAO])
            ->andFilterWhere(['like', 'SOUTH_COTABATO', $this->SOUTH_COTABATO])
            ->andFilterWhere(['like', 'MISAMIS_ORIENTAL', $this->MISAMIS_ORIENTAL]);

        return $dataProvider;
    }
}
