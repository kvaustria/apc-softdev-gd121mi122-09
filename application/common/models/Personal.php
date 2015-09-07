<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $house_num1
 * @property string $st_add1
 * @property string $brgy_add1
 * @property string $city_add1
 * @property string $house_num2
 * @property string $st_add2
 * @property string $brgy_add2
 * @property string $city_add2
 * @property integer $telno
 * @property string $email_add
 * @property integer $celno
 * @property string $birthdate
 * @property integer $age
 * @property string $status
 * @property string $sex
 * @property string $birthplace
 * @property string $nationality
 * @property integer $height
 * @property integer $weight
 * @property string $religion
 *
 * @property Applicant[] $applicants
 * @property HouseholdChecklist[] $householdChecklists
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['telno', 'celno', 'age', 'height', 'weight'], 'integer'],
            [['birthdate'], 'safe'],
            [['status', 'sex'], 'string'],
            [['firstname', 'middlename', 'lastname', 'st_add1', 'brgy_add1', 'city_add1', 'st_add2', 'brgy_add2', 'city_add2', 'email_add', 'birthplace', 'nationality', 'religion'], 'string', 'max' => 45],
            [['house_num1', 'house_num2'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'house_num1' => 'House Num1',
            'st_add1' => 'St Add1',
            'brgy_add1' => 'Brgy Add1',
            'city_add1' => 'City Add1',
            'house_num2' => 'House Num2',
            'st_add2' => 'St Add2',
            'brgy_add2' => 'Brgy Add2',
            'city_add2' => 'City Add2',
            'telno' => 'Telno',
            'email_add' => 'Email Add',
            'celno' => 'Celno',
            'birthdate' => 'Birthdate',
            'age' => 'Age',
            'status' => 'Status',
            'sex' => 'Sex',
            'birthplace' => 'Birthplace',
            'nationality' => 'Nationality',
            'height' => 'Height',
            'weight' => 'Weight',
            'religion' => 'Religion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::className(), ['personal' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouseholdChecklists()
    {
        return $this->hasMany(HouseholdChecklist::className(), ['applicant_name' => 'id']);
    }
}
