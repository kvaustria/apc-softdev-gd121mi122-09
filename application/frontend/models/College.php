<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "college".
 *
 * @property string $school_plan_to_enroll_in
 * @property string $course_plan_to_take1
 * @property string $course_plan_to_take2
 * @property integer $college_plan_id
 * @property integer $college_school_id
 *
 * @property Applicants $collegePlan
 * @property Applicants[] $applicants
 * @property Schools $schools
 */
class College extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'college';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_school_plan_to_enroll_in', 'second_school_plan_to_enroll_in', 'course_plan_to_take1', 'course_plan_to_take2'], 'required'],
            [['first_school_plan_to_enroll_in', 'second_school_plan_to_enroll_in', 'course_plan_to_take1', 'course_plan_to_take2'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'first_school_plan_to_enroll_in' => 'First School Plan To Enroll In',
          'second_school_plan_to_enroll_in' => 'Second School Plan To Enroll In',
            'course_plan_to_take1' => 'Course Plan To Take1',
            'course_plan_to_take2' => 'Course Plan To Take2',
            'college_plan_id' => 'College Plan ID',
            'college_school_id' => 'College School ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegePlan()
    {
        return $this->hasOne(Applicants::className(), ['applicant_id' => 'college_plan_id']);
    }
}
