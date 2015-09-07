<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sibling".
 *
 * @property integer $id
 * @property string $sibling_name
 * @property integer $age
 * @property string $school
 * @property integer $grd_yr
 * @property string $employed
 * @property string $married
 *
 * @property Family[] $families
 */
class Sibling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sibling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age', 'grd_yr'], 'integer'],
            [['employed', 'married'], 'string'],
            [['sibling_name', 'school'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sibling_name' => 'Sibling Name',
            'age' => 'Age',
            'school' => 'School',
            'grd_yr' => 'Grd Yr',
            'employed' => 'Employed',
            'married' => 'Married',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamilies()
    {
        return $this->hasMany(Family::className(), ['sibling' => 'sibling_name']);
    }
}
