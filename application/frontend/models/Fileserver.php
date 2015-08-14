<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fileserver".
 *
 * @property integer $id
 * @property integer $fileserver_id
 * @property string $f138
 * @property string $photo
 * @property string $certificate
 * @property string $photo1
 * @property string $taxreturn 
 * @property string $photo2
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
            'fileserver_id' => 'ID',
            'f138' => 'Enter your Full name and name of High School you are graduating from (Ex: Juan dela Cruz, Torres High School)',
          //  'photo' => 'Photo',
          //  'photo1' => 'Photo1',
          //  'photo2' => 'Photo2',
            'file' => 'Upload your Form 138 or 4th yr High School Report Card with 2nd and 3rd Grading Period Weighted Average',
            'file2' => 'Upload Certificate of Passing the Entrance Test in school of choice',
            'file3' => 'Upload Tax Return or Ceritificate of Non-filing of Income',

    //        'photo' => 'Photo',
           'certificate' => 'Enter your Full name and name of College School that you passed (Ex: Juan dela Cruz, National University)',
      //     'photo1' => 'Photo1',
          'taxreturn' => 'Enter your Full name and include Tax Return at the end (Ex: Juan dela Cruz - Tax Return)',
       //    'photo2' => 'Photo2',
        ];
    }
}
