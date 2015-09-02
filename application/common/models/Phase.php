<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phase".
 *
 * @property integer $phase_id
 * @property string $grade_screening
 * @property string $scholarship_exam
 * @property string $interview
 * @property string $home_visit_checklist
 * @property integer $points
 * @property string $scholarship_status
 * @property string $approved_by
 * @property string $remarks
 * @property string $date
 * @property integer $applicant_phase
 * @property string $school_attending_to
 *
 * @property Applicants $applicantPhase
 */
class Phase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_screening', 'scholarship_exam', 'interview', 'home_visit_checklist', 'points', 'scholarship_status', 'approved_by', 'remarks', 'date', 'applicant_phase', 'school_attending_to'], 'required'],
            [['grade_screening', 'scholarship_exam', 'interview', 'home_visit_checklist', 'scholarship_status', 'remarks', 'school_attending_to'], 'string'],
            [['points', 'applicant_phase'], 'integer'],
            [['date'], 'safe'],
            [['approved_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'phase_id' => 'Phase ID',
            'grade_screening' => 'Grade Screening',
            'scholarship_exam' => 'Scholarship Exam',
            'interview' => 'Interview',
            'home_visit_checklist' => 'Home Visit Checklist',
            'points' => 'Points',
            'scholarship_status' => 'Scholarship Status',
            'approved_by' => 'Approved By',
            'remarks' => 'Remarks',
            'date' => 'Date',
            'applicant_phase' => 'Applicant Phase',
            'school_attending_to' => 'School Attending To',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicantPhase()
    {
        return $this->hasOne(Applicants::className(), ['applicant_id' => 'applicant_phase']);
    }
}
