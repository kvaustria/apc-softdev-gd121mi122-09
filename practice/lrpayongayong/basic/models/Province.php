<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property integer $id
 * @property string $province_code
 * @property string $province_description
 * @property string $provincecol
 *
 * @property Region $id0
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_code', 'province_description'], 'string', 'max' => 32],
            [['provincecol'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'province_code' => 'Province Code',
            'province_description' => 'Province Description',
            'provincecol' => 'Provincecol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Region::className(), ['id' => 'id']);
    }
}
