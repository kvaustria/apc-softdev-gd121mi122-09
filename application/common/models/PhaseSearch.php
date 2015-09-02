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
            [['phase_id', 'points', 'applicant_phase'], 'integer'],
            [['grade_screening', 'grd_screening_comment', 'scholarship_exam', 'exam_result_comment', 'interview', 'home_visit_checklist', 'scholarship_status', 'approved_by', 'remarks', 'date', 'school_attending_to'], 'safe'],
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
            'phase_id' => $this->phase_id,
            'points' => $this->points,
            'date' => $this->date,
            'applicant_phase' => $this->applicant_phase,
        ]);

        $query->andFilterWhere(['like', 'grade_screening', $this->grade_screening])
            ->andFilterWhere(['like', 'grd_screening_comment', $this->grd_screening_comment])
            ->andFilterWhere(['like', 'scholarship_exam', $this->scholarship_exam])
            ->andFilterWhere(['like', 'exam_result_comment', $this->exam_result_comment])
            ->andFilterWhere(['like', 'interview', $this->interview])
            ->andFilterWhere(['like', 'home_visit_checklist', $this->home_visit_checklist])
            ->andFilterWhere(['like', 'scholarship_status', $this->scholarship_status])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'school_attending_to', $this->school_attending_to]);

        return $dataProvider;
    }
}
