<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "areas".
 *
 * @property integer $area_id
 * @property string $region
 * @property string $city
 *
 * @property Applicants[] $applicants
 */
class Areas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'areas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region', 'city'], 'required'],
            [['region'], 'string'],
            [['city'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'area_id' => 'Area ID',
            'region' => 'Region',
            'city' => 'City',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::className(), ['region_of_hs_graduating_from' => 'area_id']);
    }
}
