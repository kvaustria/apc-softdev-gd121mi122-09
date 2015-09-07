<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fileserver".
 *
 * @property integer $id
 * @property string $file_type
 *
 * @property Applicant[] $applicants
 */
class Fileserver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fileserver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_type'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_type' => 'File Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::className(), ['fileserver' => 'id']);
    }
}
