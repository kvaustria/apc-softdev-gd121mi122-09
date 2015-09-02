<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $school_id
 * @property string $provincial
 * @property string $ncr
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
            [['provincial', 'ncr'], 'required'],
            [['provincial', 'ncr'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_id' => 'School ID',
            'provincial' => 'Provincial',
            'ncr' => 'Ncr',
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
