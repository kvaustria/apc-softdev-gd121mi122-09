<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fileserver".
 *
 * @property integer $id
 * @property string $f138
 * @property string $photo
 */
class Fileserver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
    public $file2;
    public $file3;

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
            ['f138', 'required'],
            ['certificate', 'required'],
            ['taxreturn', 'required'],
            [['f138', 'photo', 'certificate', 'photo1', 'taxreturn', 'photo2'], 'string', 'max' => 200],
            [['file'], 'file'],
            [['file2'], 'file'],
            [['file3'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'f138' => 'F138',
          //  'photo' => 'Photo',
          //  'photo1' => 'Photo1',
          //  'photo2' => 'Photo2',
            'file' => 'Upload Form 138',
            'file2' => 'Upload certificate',
            'file3' => 'Upload Tax Return',
        ];
    }
}
