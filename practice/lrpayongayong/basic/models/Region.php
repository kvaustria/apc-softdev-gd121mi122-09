<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $id
 * @property string $region_code
 * @property string $region_description
 * @property string $regioncol
 *
 * @property Province $province
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_code', 'region_description'], 'string', 'max' => 32],
            [['regioncol'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_code' => 'Region Code',
            'region_description' => 'Region Description',
            'regioncol' => 'Regioncol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'id']);
    }
}