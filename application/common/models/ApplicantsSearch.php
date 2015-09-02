<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Applicants;

/**
 * ApplicantsSearch represents the model behind the search form about `common\models\Applicants`.
 */
class ApplicantsSearch extends Applicants
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['applicant_id', 'add1_house_num', 'add2_house_num', 'cell_no', 'age', 'height', 'weight', 'region_of_hs_graduating_from', 'section', 'school_tellno', 'college_to_apply1', 'college_to_apply2', 'father_cellnum', 'mother_cellnum', 'sibling_age'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'add1_st_add', 'add1_bry_add', 'add1_city_add', 'add2_st_add', 'add2_bry_add', 'add2_city_add', 'date_of_birth', 'status', 'sex', 'place_of_birth', 'nationality', 'religion', 'type_of_hs_graduating_from', 'hs_graduating_from', 'complete_school_add', 'name_of_principal', 'organization', 'position_held', 'course_plan_to_take1', 'course_plan_to_take2', 'fathername', 'father_occu', 'father_company_Add', 'father_birthdate', 'mothername', 'mother_occu', 'mother_company_Add', 'mother_birthdate', 'sibling', 'sibling_school', 'sibling_grd_yr', 'employed', 'married', 'form138', 'certificate', 'taxreturn'], 'safe'],
            [['household_income_per_yr'], 'number'],
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
            'add1_house_num' => $this->add1_house_num,
            'add2_house_num' => $this->add2_house_num,
            'cell_no' => $this->cell_no,
            'date_of_birth' => $this->date_of_birth,
            'age' => $this->age,
            'height' => $this->height,
            'weight' => $this->weight,
            'region_of_hs_graduating_from' => $this->region_of_hs_graduating_from,
            'section' => $this->section,
            'school_tellno' => $this->school_tellno,
            'college_to_apply1' => $this->college_to_apply1,
            'college_to_apply2' => $this->college_to_apply2,
            'father_cellnum' => $this->father_cellnum,
            'father_birthdate' => $this->father_birthdate,
            'mother_cellnum' => $this->mother_cellnum,
            'mother_birthdate' => $this->mother_birthdate,
            'sibling_age' => $this->sibling_age, 
            'household_income_per_yr' => $this->household_income_per_yr,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'add1_st_add', $this->add1_st_add])
            ->andFilterWhere(['like', 'add1_bry_add', $this->add1_bry_add])
            ->andFilterWhere(['like', 'add1_city_add', $this->add1_city_add])
            ->andFilterWhere(['like', 'add2_st_add', $this->add2_st_add])
            ->andFilterWhere(['like', 'add2_bry_add', $this->add2_bry_add])
            ->andFilterWhere(['like', 'add2_city_add', $this->add2_city_add])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'place_of_birth', $this->place_of_birth])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'type_of_hs_graduating_from', $this->type_of_hs_graduating_from])
            ->andFilterWhere(['like', 'hs_graduating_from', $this->hs_graduating_from])
            ->andFilterWhere(['like', 'complete_school_add', $this->complete_school_add])
            ->andFilterWhere(['like', 'name_of_principal', $this->name_of_principal])
            ->andFilterWhere(['like', 'organization', $this->organization])
            ->andFilterWhere(['like', 'position_held', $this->position_held])
            ->andFilterWhere(['like', 'course_plan_to_take1', $this->course_plan_to_take1])
            ->andFilterWhere(['like', 'course_plan_to_take2', $this->course_plan_to_take2])
            ->andFilterWhere(['like', 'fathername', $this->fathername])
            ->andFilterWhere(['like', 'father_occu', $this->father_occu])
            ->andFilterWhere(['like', 'father_company_Add', $this->father_company_Add])
            ->andFilterWhere(['like', 'mothername', $this->mothername])
            ->andFilterWhere(['like', 'mother_occu', $this->mother_occu])
            ->andFilterWhere(['like', 'mother_company_Add', $this->mother_company_Add])
         //   ->andFilterWhere(['like', 'sibling', $this->sibling])
            ->andFilterWhere(['like', 'sibling_age', $this->sibling_age])
            ->andFilterWhere(['like', 'sibling_school', $this->sibling_school])
            ->andFilterWhere(['like', 'sibling_grd_yr', $this->sibling_grd_yr])
            ->andFilterWhere(['like', 'employed', $this->employed])
            ->andFilterWhere(['like', 'married', $this->married])
            ->andFilterWhere(['like', 'form138', $this->form138])
            ->andFilterWhere(['like', 'certificate', $this->certificate])
            ->andFilterWhere(['like', 'taxreturn', $this->taxreturn]);

        return $dataProvider;
    }
}
