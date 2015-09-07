<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Applicant;

/**
 * ApplicantSearch represents the model behind the search form about `common\models\Applicant`.
 */
class ApplicantSearch extends Applicant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'personal', 'academic', 'college', 'family', 'fileserver'], 'integer'],
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
        $query = Applicant::find();

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
            'personal' => $this->personal,
            'academic' => $this->academic,
            'college' => $this->college,
            'family' => $this->family,
            'fileserver' => $this->fileserver,
        ]);

        return $dataProvider;
    }
}
