<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "household_checklist".
 *
 * @property integer $id
 * @property integer $applicant_name
 * @property integer $address
 *
 * @property Personal $applicantName
 * @property Phase[] $phases
 */
class HouseholdChecklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'household_checklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['applicant_name', 'address'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'applicant_name' => 'Applicant Name',
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicantName()
    {
        return $this->hasOne(Personal::className(), ['id' => 'applicant_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhases()
    {
        return $this->hasMany(Phase::className(), ['checklist' => 'id']);
    }
}
