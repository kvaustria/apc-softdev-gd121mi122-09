<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\College;

/**
 * CollegeSearch represents the model behind the search form about `common\models\College`.
 */
class CollegeSearch extends College
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['college_to_apply1', 'college_to_apply2', 'course_to_take1', 'course_to_take2'], 'safe'],
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
        $query = College::find();

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
        ]);

        $query->andFilterWhere(['like', 'college_to_apply1', $this->college_to_apply1])
            ->andFilterWhere(['like', 'college_to_apply2', $this->college_to_apply2])
            ->andFilterWhere(['like', 'course_to_take1', $this->course_to_take1])
            ->andFilterWhere(['like', 'course_to_take2', $this->course_to_take2]);

        return $dataProvider;
    }
}
