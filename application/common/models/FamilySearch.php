<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Family;

/**
 * FamilySearch represents the model behind the search form about `common\models\Family`.
 */
class FamilySearch extends Family
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'father_contact', 'mother_contact', 'guardian_contact', 'household_income'], 'integer'],
            [['father_name', 'father_occupation', 'father_company', 'father_birthdate', 'mother_name', 'mother_occupation', 'mother_company', 'mother_birthdate', 'guardian_name', 'guardian_occupation', 'guardian_company', 'guardian_birthdate', 'sibling'], 'safe'],
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
        $query = Family::find();

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
            'father_contact' => $this->father_contact,
            'father_birthdate' => $this->father_birthdate,
            'mother_contact' => $this->mother_contact,
            'mother_birthdate' => $this->mother_birthdate,
            'guardian_contact' => $this->guardian_contact,
            'guardian_birthdate' => $this->guardian_birthdate,
            'household_income' => $this->household_income,
        ]);

        $query->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'father_occupation', $this->father_occupation])
            ->andFilterWhere(['like', 'father_company', $this->father_company])
            ->andFilterWhere(['like', 'mother_name', $this->mother_name])
            ->andFilterWhere(['like', 'mother_occupation', $this->mother_occupation])
            ->andFilterWhere(['like', 'mother_company', $this->mother_company])
            ->andFilterWhere(['like', 'guardian_name', $this->guardian_name])
            ->andFilterWhere(['like', 'guardian_occupation', $this->guardian_occupation])
            ->andFilterWhere(['like', 'guardian_company', $this->guardian_company])
            ->andFilterWhere(['like', 'sibling', $this->sibling]);

        return $dataProvider;
    }
}
