<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phase".
 *
 * @property integer $id
 * @property integer $applicant
 * @property string $grade_screening
 * @property string $screening_feedback
 * @property string $exam
 * @property string $interview
 * @property string $interview_feedback
 * @property integer $checklist
 * @property integer $points
 * @property string $status
 * @property string $remarks
 * @property string $approved_by
 * @property integer $school_attending
 * @property string $date
 *
 * @property Applicant $applicant0
 * @property HouseholdChecklist $checklist0
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
            [['applicant', 'checklist', 'points', 'school_attending'], 'integer'],
            [['grade_screening', 'screening_feedback', 'exam', 'interview', 'interview_feedback', 'status', 'remarks'], 'string'],
            [['date'], 'safe'],
            [['approved_by'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'applicant' => 'Applicant',
            'grade_screening' => 'Grade Screening',
            'screening_feedback' => 'Screening Feedback',
            'exam' => 'Exam',
            'interview' => 'Interview',
            'interview_feedback' => 'Interview Feedback',
            'checklist' => 'Checklist',
            'points' => 'Points',
            'status' => 'Status',
            'remarks' => 'Remarks',
            'approved_by' => 'Approved By',
            'school_attending' => 'School Attending',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicant0()
    {
        return $this->hasOne(Applicant::className(), ['id' => 'applicant']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChecklist0()
    {
        return $this->hasOne(HouseholdChecklist::className(), ['id' => 'checklist']);
    }
}
