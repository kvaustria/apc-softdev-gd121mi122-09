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
 * @property integer $sibling_age
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

    public $file1;
    public $file2;
    public $file3;

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

            [['file1', 'file2', 'file3'], 'file'],

            [['first_name', 'middle_name', 'last_name', 'add1_house_num', 'add1_st_add', 'add1_bry_add', 'add1_city_add', 'cell_no', 'date_of_birth', 'age', 'status', 'sex', 'place_of_birth', 'nationality', 'height', 'weight', 'religion', 'region_of_hs_graduating_from', 'type_of_hs_graduating_from', 'hs_graduating_from', 'section', 'complete_school_add', 'name_of_principal', 'school_tellno', 'organization', 'position_held', 'college_to_apply1', 'college_to_apply2', 'course_plan_to_take1', 'course_plan_to_take2', 'fathername', 'father_occu', 'father_company_Add', 'father_cellnum', 'father_birthdate', 'mothername', 'mother_occu', 'mother_company_Add', 'mother_cellnum', 'mother_birthdate', 'sibling', 'sibling_age', 'sibling_school', 'sibling_grd_yr', 'employed', 'married', 'household_income_per_yr'], 'required'],
            [['add1_house_num', 'add2_house_num', 'cell_no', 'age', 'height', 'weight', 'region_of_hs_graduating_from', 'section', 'school_tellno', 'college_to_apply1', 'college_to_apply2', 'father_cellnum', 'mother_cellnum', 'sibling_age'], 'integer'],
            [['date_of_birth', 'father_birthdate', 'mother_birthdate'], 'safe'],
            [['status', 'sex', 'type_of_hs_graduating_from', 'organization', 'position_held', 'course_plan_to_take1', 'course_plan_to_take2', 'father_company_Add', 'mother_company_Add','sibling_school', 'sibling_grd_yr', 'employed', 'married'], 'string'],
            [['household_income_per_yr'], 'number'],
            [['first_name', 'middle_name', 'last_name', 'add1_st_add', 'add1_bry_add', 'add1_city_add', 'add2_st_add', 'add2_bry_add', 'add2_city_add', 'place_of_birth', 'nationality', 'religion', 'sibling', 'form138','certificate', 'taxreturn'], 'string', 'max' => 50],
            [['hs_graduating_from', 'complete_school_add', 'name_of_principal', 'fathername', 'father_occu', 'mothername', 'mother_occu'], 'string', 'max' => 100]
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
            'add1_house_num' => 'Add1 House Num',
            'add1_st_add' => 'Add1 St Add',
            'add1_bry_add' => 'Add1 Bry Add',
            'add1_city_add' => 'Add1 City Add',
            'add2_house_num' => 'Add2 House Num',
            'add2_st_add' => 'Add2 St Add',
            'add2_bry_add' => 'Add2 Bry Add',
            'add2_city_add' => 'Add2 City Add',
            'cell_no' => 'Cell No',
            'date_of_birth' => 'Date Of Birth',
            'age' => 'Age',
            'status' => 'Status',
            'sex' => 'Sex',
            'place_of_birth' => 'Place Of Birth',
            'nationality' => 'Nationality',
            'height' => 'Height',
            'weight' => 'Weight',
            'religion' => 'Religion',
            'region_of_hs_graduating_from' => 'Region Of Hs Graduating From',
            'type_of_hs_graduating_from' => 'Type Of Hs Graduating From',
            'hs_graduating_from' => 'Hs Graduating From',
            'section' => 'Section',
            'complete_school_add' => 'Complete School Add',
            'name_of_principal' => 'Name Of Principal',
            'school_tellno' => 'School Tellno',
            'organization' => 'Organization',
            'position_held' => 'Position Held',
            'college_to_apply1' => 'College To Apply1',
            'college_to_apply2' => 'College To Apply2',
            'course_plan_to_take1' => 'Course Plan To Take1',
            'course_plan_to_take2' => 'Course Plan To Take2',
            'fathername' => 'Fathername',
            'father_occu' => 'Father Occu',
            'father_company_Add' => 'Father Company  Add',
            'father_cellnum' => 'Father Cellnum',
            'father_birthdate' => 'Father Birthdate',
            'mothername' => 'Mothername',
            'mother_occu' => 'Mother Occu',
            'mother_company_Add' => 'Mother Company  Add',
            'mother_cellnum' => 'Mother Cellnum',
            'mother_birthdate' => 'Mother Birthdate',
            'sibling' => 'Sibling',
            'sibling_age' => 'Sibling Age',
            'sibling_school' => 'Sibling School',
            'sibling_grd_yr' => 'Sibling Grd Yr',
            'employed' => 'Employed',
            'married' => 'Married',
            'household_income_per_yr' => 'Household Income Per Yr',
            'file1' => 'Form 138',
            'file2' => 'Certificate',
            'file3' => 'Income Tax Return',

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
