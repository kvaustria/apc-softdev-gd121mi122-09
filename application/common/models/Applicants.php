<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "applicants".
 *
 * @property integer $applicant_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property integer $add1_house_num
 * @property string $add1_st_add
 * @property string $add1_bry_add
 * @property string $add1_city_add
 * @property integer $add2_house_num
 * @property string $add2_st_add
 * @property string $add2_bry_add
 * @property string $add2_city_add
 * @property integer $cell_no
 * @property string $date_of_birth
 * @property integer $age
 * @property string $status
 * @property string $sex
 * @property string $place_of_birth
 * @property string $nationality
 * @property integer $height
 * @property integer $weight
 * @property string $religion
 * @property integer $region_of_hs_graduating_from
 * @property string $type_of_hs_graduating_from
 * @property string $hs_graduating_from
 * @property integer $section
 * @property string $complete_school_add
 * @property string $name_of_principal
 * @property integer $school_tellno
 * @property string $organization
 * @property string $position_held
 * @property integer $college_to_apply1
 * @property integer $college_to_apply2
 * @property string $course_plan_to_take1
 * @property string $course_plan_to_take2
 * @property string $fathername
 * @property string $father_occu
 * @property string $father_company_Add
 * @property integer $father_cellnum
 * @property string $father_birthdate
 * @property string $mothername
 * @property string $mother_occu
 * @property string $mother_company_Add
 * @property integer $mother_cellnum
 * @property string $mother_birthdate
 * @property string $sibling
 * @property string $sibling_age
 * @property string $sibling_school
 * @property string $sibling_grd_yr
 * @property string $employed
 * @property string $married
 * @property string $household_income_per_yr
 * @property string $form138
 * @property string $certificate
 * @property string $taxreturn
 *
 * @property Areas $regionOfHsGraduatingFrom
 * @property Schools $collegeToApply1
 * @property Schools $collegeToApply2
 * @property Phase[] $phases
 */
class Applicants extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applicants';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'middle_name', 'last_name', 'add1_house_num', 'add1_st_add', 'add1_bry_add', 'add1_city_add', 'date_of_birth', 'age', 'status', 'sex', 'place_of_birth', 'nationality', 'height', 'weight', 'religion', 'region_of_hs_graduating_from', 'type_of_hs_graduating_from', 'hs_graduating_from', 'section', 'complete_school_add', 'name_of_principal', 'school_tellno', 'college_to_apply1', 'college_to_apply2', 'course_plan_to_take1', 'course_plan_to_take2', 'fathername', 'father_occu', 'father_birthdate', 'mothername', 'mother_occu', 'mother_birthdate', 'sibling', 'sibling_age', 'sibling_school', 'sibling_grd_yr', 'employed', 'married', 'household_income_per_yr'], 'required'],
            [['add1_house_num', 'add2_house_num', 'cell_no', 'age', 'height', 'weight', 'section', 'school_tellno', 'father_cellnum', 'mother_cellnum','region_of_hs_graduating_from','college_to_apply1', 'college_to_apply2'], 'integer'],
            [['organization', 'position_held','date_of_birth', 'father_birthdate', 'mother_birthdate'], 'safe'],
            [['status', 'sex', 'type_of_hs_graduating_from', 'organization', 'position_held', 'course_plan_to_take1', 'course_plan_to_take2', 'father_company_Add', 'mother_company_Add', 'sibling', 'sibling_age', 'sibling_school', 'sibling_grd_yr', 'employed', 'married'], 'string'],
            [['household_income_per_yr'], 'number'],
            [['first_name', 'middle_name', 'last_name', 'add1_st_add', 'add1_bry_add', 'add1_city_add', 'add2_st_add', 'add2_bry_add', 'add2_city_add', 'place_of_birth', 'nationality', 'religion'], 'string', 'max' => 50],
            [['hs_graduating_from', 'complete_school_add', 'name_of_principal', 'fathername', 'father_occu', 'mothername', 'mother_occu'], 'string', 'max' => 100],
            [['form138', 'certificate', 'taxreturn'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'applicant_id' => 'Applicant ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'add1_house_num' => 'Primary House Number address',
            'add1_st_add' => 'Street Address',
            'add1_bry_add' => 'Barangay Address',
            'add1_city_add' => 'City Address',
            'add2_house_num' => 'Secondary House Number',
            'add2_st_add' => 'Street Address',
            'add2_bry_add' => 'Barangay Address',
            'add2_city_add' => 'City Address',
            'cell_no' => 'Cellphone Number',
            'date_of_birth' => 'Date Of Birth',
            'age' => 'Age',
            'status' => 'Status',
            'sex' => 'Sex',
            'place_of_birth' => 'Place Of Birth',
            'nationality' => 'Nationality',
            'height' => 'Height',
            'weight' => 'Weight',
            'religion' => 'Religion',
            'region_of_hs_graduating_from' => 'Region Of HS Graduating From',
            'type_of_hs_graduating_from' => 'Type Of HS Graduating From',
            'hs_graduating_from' => 'High School Graduating From',
            'section' => 'Section',
            'complete_school_add' => 'Complete School Address',
            'name_of_principal' => 'Name Of Principal',
            'school_tellno' => 'School Telephone number',
            'organization' => 'Organization',
            'position_held' => 'Position Held',
            'college_to_apply1' => 'First choice of college to apply to',
            'college_to_apply2' => 'Second choice of college to apply to',
            'course_plan_to_take1' => 'first course choice',
            'course_plan_to_take2' => 'Second course choice',
            'fathername' => 'name of father',
            'father_occu' => 'occupation',
            'father_company_Add' => 'Company  Address',
            'father_cellnum' => 'Cellphone number',
            'father_birthdate' => 'Birth date',
            'mothername' => 'name of mother',
            'mother_occu' => 'occupation',
            'mother_company_Add' => 'Company  Add',
            'mother_cellnum' => 'Cellphone number',
            'mother_birthdate' => 'Birth date',
            'sibling' => 'Sibling',
            'sibling_age' => 'Age',
            'sibling_school' => 'School attending',
            'sibling_grd_yr' => 'Grade/Yr',
            'employed' => 'Employed?',
            'married' => 'Married?',
            'household_income_per_yr' => 'Household Income Per Year',
            'form138' => 'Form138',
            'certificate' => 'Certificate',
            'taxreturn' => 'Tax return',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegionOfHsGraduatingFrom()
    {
        return $this->hasOne(Areas::className(), ['area_id' => 'region_of_hs_graduating_from']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegeToApply1()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'college_to_apply1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegeToApply2()
    {
        return $this->hasOne(Schools::className(), ['school_id' => 'college_to_apply2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhases()
    {
        return $this->hasMany(Phase::className(), ['applicant_phase' => 'applicant_id']);
    }
}
