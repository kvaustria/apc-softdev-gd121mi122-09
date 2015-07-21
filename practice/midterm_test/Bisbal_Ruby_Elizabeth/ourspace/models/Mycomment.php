<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mycomment".
 *
 * @property integer $id
 * @property integer $myaddress
 * @property string $author
 * @property string $body
 * @property string $created_at
 */
class Mycomment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mycomment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'myaddress', 'author', 'body'], 'required'],
            [['id', 'myaddress'], 'integer'],
            [['body'], 'string'],
            [['created_at'], 'safe'],
            [['author'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'myaddress' => 'Myaddress',
            'author' => 'Author',
            'body' => 'Body',
            'created_at' => 'Created At',
        ];
    }
}
