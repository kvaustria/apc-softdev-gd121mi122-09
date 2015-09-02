<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "areas".
 *
 * @property integer $area_id
 * @property string $NCR
 * @property string $ISABELA
 * @property string $CAR
 * @property string $PANGASINAN
 * @property string $ZAMBALES
 * @property string $NUEVA_ECIJA
 * @property string $TARLAC
 * @property string $PAMPANGA
 * @property string $BULACAN
 * @property string $CAVITE
 * @property string $LAGUNA
 * @property string $BATANGAS
 * @property string $QUEZON
 * @property string $CAMARINES SUR
 * @property string $NEGROS_OCCIDENTAL
 * @property string $ILOILO
 * @property string $CEBU
 * @property string $LEYTE
 * @property string $PALAWAN
 * @property string $DAVAO
 * @property string $SOUTH_COTABATO
 * @property string $MISAMIS_ORIENTAL
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
            [['NCR', 'ISABELA', 'CAR', 'PANGASINAN', 'ZAMBALES', 'NUEVA_ECIJA', 'TARLAC', 'PAMPANGA', 'BULACAN', 'CAVITE', 'LAGUNA', 'BATANGAS', 'QUEZON', 'CAMARINES SUR', 'NEGROS_OCCIDENTAL', 'ILOILO', 'CEBU', 'LEYTE', 'PALAWAN', 'DAVAO', 'SOUTH_COTABATO', 'MISAMIS_ORIENTAL'], 'required'],
            [['NCR', 'ISABELA', 'CAR', 'PANGASINAN', 'ZAMBALES', 'NUEVA_ECIJA', 'TARLAC', 'PAMPANGA', 'BULACAN', 'CAVITE', 'LAGUNA', 'BATANGAS', 'QUEZON', 'CAMARINES SUR', 'NEGROS_OCCIDENTAL', 'ILOILO', 'CEBU', 'LEYTE', 'PALAWAN', 'DAVAO', 'SOUTH_COTABATO', 'MISAMIS_ORIENTAL'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'area_id' => 'Area ID',
            'NCR' => 'Ncr',
            'ISABELA' => 'Isabela',
            'CAR' => 'Car',
            'PANGASINAN' => 'Pangasinan',
            'ZAMBALES' => 'Zambales',
            'NUEVA_ECIJA' => 'Nueva  Ecija',
            'TARLAC' => 'Tarlac',
            'PAMPANGA' => 'Pampanga',
            'BULACAN' => 'Bulacan',
            'CAVITE' => 'Cavite',
            'LAGUNA' => 'Laguna',
            'BATANGAS' => 'Batangas',
            'QUEZON' => 'Quezon',
            'CAMARINES SUR' => 'Camarines  Sur',
            'NEGROS_OCCIDENTAL' => 'Negros  Occidental',
            'ILOILO' => 'Iloilo',
            'CEBU' => 'Cebu',
            'LEYTE' => 'Leyte',
            'PALAWAN' => 'Palawan',
            'DAVAO' => 'Davao',
            'SOUTH_COTABATO' => 'South  Cotabato',
            'MISAMIS_ORIENTAL' => 'Misamis  Oriental',
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
