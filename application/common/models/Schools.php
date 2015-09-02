<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $school_id
 * @property string $schools
 * @property string $region
 *
 * @property Applicants[] $applicants
 * @property Applicants[] $applicants0
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['schools', 'region'], 'required'],
            [['region'], 'string'],
            [['schools'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_id' => 'School ID',
            'schools' => 'Schools',
            'region' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::className(), ['college_to_apply1' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants0()
    {
        return $this->hasMany(Applicants::className(), ['college_to_apply2' => 'school_id']);
    }
}
