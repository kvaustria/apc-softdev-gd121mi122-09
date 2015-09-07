<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Phase;

/**
 * PhaseSearch represents the model behind the search form about `common\models\Phase`.
 */
class PhaseSearch extends Phase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'applicant', 'checklist', 'points', 'school_attending'], 'integer'],
            [['grade_screening', 'screening_feedback', 'exam', 'interview', 'interview_feedback', 'status', 'remarks', 'approved_by', 'date'], 'safe'],
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
        $query = Phase::find();

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
            'applicant' => $this->applicant,
            'checklist' => $this->checklist,
            'points' => $this->points,
            'school_attending' => $this->school_attending,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'grade_screening', $this->grade_screening])
            ->andFilterWhere(['like', 'screening_feedback', $this->screening_feedback])
            ->andFilterWhere(['like', 'exam', $this->exam])
            ->andFilterWhere(['like', 'interview', $this->interview])
            ->andFilterWhere(['like', 'interview_feedback', $this->interview_feedback])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by]);

        return $dataProvider;
    }
}
