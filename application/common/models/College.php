<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "college".
 *
 * @property integer $id
 * @property string $college_to_apply1
 * @property string $college_to_apply2
 * @property string $course_to_take1
 * @property string $course_to_take2
 *
 * @property Applicant[] $applicants
 * @property School $collegeToApply1
 * @property School $collegeToApply2
 * @property Course $courseToTake1
 * @property Course $courseToTake2
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
            [['college_to_apply1', 'college_to_apply2', 'course_to_take1', 'course_to_take2'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'college_to_apply1' => 'College To Apply1',
            'college_to_apply2' => 'College To Apply2',
            'course_to_take1' => 'Course To Take1',
            'course_to_take2' => 'Course To Take2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::className(), ['college' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegeToApply1()
    {
        return $this->hasOne(School::className(), ['school_name' => 'college_to_apply1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegeToApply2()
    {
        return $this->hasOne(School::className(), ['school_name' => 'college_to_apply2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseToTake1()
    {
        return $this->hasOne(Course::className(), ['course_name' => 'course_to_take1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseToTake2()
    {
        return $this->hasOne(Course::className(), ['course_name' => 'course_to_take2']);
    }
}
