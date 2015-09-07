<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HouseholdChecklist;

/**
 * HouseholdChecklistSearch represents the model behind the search form about `common\models\HouseholdChecklist`.
 */
class HouseholdChecklistSearch extends HouseholdChecklist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'applicant_name', 'address'], 'integer'],
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
        $query = HouseholdChecklist::find();

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
            'applicant_name' => $this->applicant_name,
            'address' => $this->address,
        ]);

        return $dataProvider;
    }
}
