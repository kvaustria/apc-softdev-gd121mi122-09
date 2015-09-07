<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property integer $id
 * @property string $school_name
 * @property string $location
 *
 * @property College[] $colleges
 * @property College[] $colleges0
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_name', 'location'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_name' => 'School Name',
            'location' => 'Location',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColleges()
    {
        return $this->hasMany(College::className(), ['college_to_apply1' => 'school_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColleges0()
    {
        return $this->hasMany(College::className(), ['college_to_apply2' => 'school_name']);
    }
}
