<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Academic;

/**
 * AcademicSearch represents the model behind the search form about `common\models\Academic`.
 */
class AcademicSearch extends Academic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'section', 'tel_no'], 'integer'],
            [['location', 'type', 'hs_name', 'hs_add', 'principal', 'organization', 'position'], 'safe'],
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
        $query = Academic::find();

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
            'id' => $this->id,
            'section' => $this->section,
            'tel_no' => $this->tel_no,
        ]);

        $query->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'hs_name', $this->hs_name])
            ->andFilterWhere(['like', 'hs_add', $this->hs_add])
            ->andFilterWhere(['like', 'principal', $this->principal])
            ->andFilterWhere(['like', 'organization', $this->organization])
            ->andFilterWhere(['like', 'position', $this->position]);

        return $dataProvider;
    }
}
