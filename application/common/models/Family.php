<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "family".
 *
 * @property integer $id
 * @property string $father_name
 * @property string $father_occupation
 * @property string $father_company
 * @property integer $father_contact
 * @property string $father_birthdate
 * @property string $mother_name
 * @property string $mother_occupation
 * @property string $mother_company
 * @property integer $mother_contact
 * @property string $mother_birthdate
 * @property string $guardian_name
 * @property string $guardian_occupation
 * @property string $guardian_company
 * @property integer $guardian_contact
 * @property string $guardian_birthdate
 * @property string $sibling
 * @property integer $household_income
 *
 * @property Applicant[] $applicants
 * @property Sibling $sibling0
 */
class Family extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'family';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['father_contact', 'mother_contact', 'guardian_contact', 'household_income'], 'integer'],
            [['father_birthdate', 'mother_birthdate', 'guardian_birthdate'], 'safe'],
            [['father_name', 'father_occupation', 'father_company', 'mother_name', 'mother_occupation', 'mother_company', 'guardian_name', 'guardian_occupation', 'guardian_company', 'sibling'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'father_name' => 'Father Name',
            'father_occupation' => 'Father Occupation',
            'father_company' => 'Father Company',
            'father_contact' => 'Father Contact',
            'father_birthdate' => 'Father Birthdate',
            'mother_name' => 'Mother Name',
            'mother_occupation' => 'Mother Occupation',
            'mother_company' => 'Mother Company',
            'mother_contact' => 'Mother Contact',
            'mother_birthdate' => 'Mother Birthdate',
            'guardian_name' => 'Guardian Name',
            'guardian_occupation' => 'Guardian Occupation',
            'guardian_company' => 'Guardian Company',
            'guardian_contact' => 'Guardian Contact',
            'guardian_birthdate' => 'Guardian Birthdate',
            'sibling' => 'Sibling',
            'household_income' => 'Household Income',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::className(), ['family' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSibling0()
    {
        return $this->hasOne(Sibling::className(), ['sibling_name' => 'sibling']);
    }
}
