<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "applicant".
 *
 * @property integer $id
 * @property integer $personal
 * @property integer $academic
 * @property integer $college
 * @property integer $family
 * @property integer $fileserver
 *
 * @property Personal $personal0
 * @property Academic $academic0
 * @property College $college0
 * @property Family $family0
 * @property Fileserver $fileserver0
 * @property Phase[] $phases
 */
class Applicant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applicant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['personal', 'academic', 'college', 'family', 'fileserver'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'personal' => 'Personal',
            'academic' => 'Academic',
            'college' => 'College',
            'family' => 'Family',
            'fileserver' => 'Fileserver',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonal0()
    {
        return $this->hasOne(Personal::className(), ['id' => 'personal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademic0()
    {
        return $this->hasOne(Academic::className(), ['id' => 'academic']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollege0()
    {
        return $this->hasOne(College::className(), ['id' => 'college']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamily0()
    {
        return $this->hasOne(Family::className(), ['id' => 'family']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFileserver0()
    {
        return $this->hasOne(Fileserver::className(), ['id' => 'fileserver']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhases()
    {
        return $this->hasMany(Phase::className(), ['applicant' => 'id']);
    }
}
