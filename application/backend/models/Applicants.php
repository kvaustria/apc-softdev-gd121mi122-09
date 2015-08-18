<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "applicants".
 *
 * @property integer $applicant_id
 * @property integer $applicant_personal_id
 * @property integer $applicant_college_id
 * @property integer $applicant_academic_id
 * @property integer $applicant_family_id
 * @property string $status
 *
 * @property Academic $applicantAcademic
 * @property Family $applicantFamily
 * @property Personal $applicantPersonal
 * @property College $applicantCollege
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
            [['applicant_personal_id', 'applicant_college_id', 'applicant_academic_id', 'applicant_family_id'], 'integer'],
            [['status'], 'required'],
            [['status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'applicant_id' => 'Applicant ID',
            'applicant_personal_id' => 'Applicant Personal ID',
            'applicant_college_id' => 'Applicant College ID',
            'applicant_academic_id' => 'Applicant Academic ID',
            'applicant_family_id' => 'Applicant Family ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicantAcademic()
    {
        return $this->hasOne(Academic::className(), ['academic_id' => 'applicant_academic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicantFamily()
    {
        return $this->hasOne(Family::className(), ['fam_background_id' => 'applicant_family_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicantPersonal()
    {
        return $this->hasOne(Personal::className(), ['personal_id' => 'applicant_personal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicantCollege()
    {
        return $this->hasOne(College::className(), ['college_plan_id' => 'applicant_college_id']);
    }
}
