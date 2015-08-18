<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Applicants;

/**
 * ApplicantsSearch represents the model behind the search form about `backend\models\Applicants`.
 */
class ApplicantsSearch extends Applicants
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['applicant_id', 'applicant_personal_id', 'applicant_college_id', 'applicant_academic_id', 'applicant_family_id'], 'integer'],
            [['status'], 'safe'],
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
        $query = Applicants::find();

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
            'applicant_id' => $this->applicant_id,
            'applicant_personal_id' => $this->applicant_personal_id,
            'applicant_college_id' => $this->applicant_college_id,
            'applicant_academic_id' => $this->applicant_academic_id,
            'applicant_family_id' => $this->applicant_family_id,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
