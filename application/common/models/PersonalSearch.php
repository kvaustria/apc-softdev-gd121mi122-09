<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Personal;

/**
 * PersonalSearch represents the model behind the search form about `common\models\Personal`.
 */
class PersonalSearch extends Personal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'telno', 'celno', 'age', 'height', 'weight'], 'integer'],
            [['firstname', 'middlename', 'lastname', 'house_num1', 'st_add1', 'brgy_add1', 'city_add1', 'house_num2', 'st_add2', 'brgy_add2', 'city_add2', 'email_add', 'birthdate', 'status', 'sex', 'birthplace', 'nationality', 'religion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Personal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'telno' => $this->telno,
            'celno' => $this->celno,
            'birthdate' => $this->birthdate,
            'age' => $this->age,
            'height' => $this->height,
            'weight' => $this->weight,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'house_num1', $this->house_num1])
            ->andFilterWhere(['like', 'st_add1', $this->st_add1])
            ->andFilterWhere(['like', 'brgy_add1', $this->brgy_add1])
            ->andFilterWhere(['like', 'city_add1', $this->city_add1])
            ->andFilterWhere(['like', 'house_num2', $this->house_num2])
            ->andFilterWhere(['like', 'st_add2', $this->st_add2])
            ->andFilterWhere(['like', 'brgy_add2', $this->brgy_add2])
            ->andFilterWhere(['like', 'city_add2', $this->city_add2])
            ->andFilterWhere(['like', 'email_add', $this->email_add])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'birthplace', $this->birthplace])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'religion', $this->religion]);

        return $dataProvider;
    }
}
