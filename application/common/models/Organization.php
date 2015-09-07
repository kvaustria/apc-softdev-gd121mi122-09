<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property integer $id
 * @property string $org_name
 * @property string $position
 *
 * @property Academic[] $academics
 * @property Academic[] $academics0
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_name', 'position'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'org_name' => 'Org Name',
            'position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademics()
    {
        return $this->hasMany(Academic::className(), ['position' => 'position']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademics0()
    {
        return $this->hasMany(Academic::className(), ['organization' => 'org_name']);
    }
}
