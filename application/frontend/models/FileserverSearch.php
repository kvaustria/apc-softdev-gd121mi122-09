<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Fileserver;

/**
 * FileserverSearch represents the model behind the search form about `frontend\models\Fileserver`.
 */
class FileserverSearch extends Fileserver
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fileserver_id'], 'integer'],
            [['f138', 'photo', 'certificate', 'photo1', 'taxreturn', 'photo2'], 'safe'],
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
        $query = Fileserver::find();

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
            'fileserver_id' => $this->fileserver_id,
        ]);

        $query->andFilterWhere(['like', 'f138', $this->f138])
            ->andFilterWhere(['like', 'photo', $this->photo])
          ->andFilterWhere(['like', 'certificate', $this->certificate])
          ->andFilterWhere(['like', 'photo1', $this->photo1])
          ->andFilterWhere(['like', 'taxreturn', $this->taxreturn])
          ->andFilterWhere(['like', 'photo2', $this->photo2]);

        return $dataProvider;
    }
}
