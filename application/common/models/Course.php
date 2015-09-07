<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property string $course_name
 *
 * @property College[] $colleges
 * @property College[] $colleges0
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_name' => 'Course Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColleges()
    {
        return $this->hasMany(College::className(), ['course_to_take1' => 'course_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColleges0()
    {
        return $this->hasMany(College::className(), ['course_to_take2' => 'course_name']);
    }
}
