<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "academic".
 *
 * @property integer $id
 * @property string $location
 * @property string $type
 * @property string $hs_name
 * @property integer $section
 * @property string $hs_add
 * @property string $principal
 * @property integer $tel_no
 * @property string $organization
 * @property string $position
 *
 * @property Area $location0
 * @property Organization $position0
 * @property Organization $organization0
 * @property Applicant[] $applicants
 */
class Academic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'academic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'string'],
            [['section', 'tel_no'], 'integer'],
            [['location', 'hs_name', 'hs_add', 'principal', 'organization', 'position'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location' => 'Location',
            'type' => 'High School Type',
            'hs_name' => 'High School Graduating From',
            'section' => 'Section',
            'hs_add' => 'Complete High School Address',
            'principal' => 'Name of Principal',
            'tel_no' => 'High School phone number',
            'organization' => 'Organizations',
            'position' => 'Positions held',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation0()
    {
        return $this->hasOne(Area::className(), ['location' => 'location']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition0()
    {
        return $this->hasOne(Organization::className(), ['position' => 'position']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization0()
    {
        return $this->hasOne(Organization::className(), ['org_name' => 'organization']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::className(), ['academic' => 'id']);
    }
}
