<?php

namespace app\modules\administrator\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\administrator\models\Project;

/**
 * ProjectSearch represents the model behind the search form about `app\modules\administrator\models\Project`.
 */
class ProjectSearch extends Project
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'order', 'publish', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['client_name', 'study_type', 'region', 'commodity', 'location_coordinates'], 'safe'],
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
        $query = Project::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'order' => SORT_ASC,
                ],                
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'order' => $this->order,
            'publish' => $this->publish,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'client_name', $this->client_name])
            ->andFilterWhere(['like', 'study_type', $this->study_type])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'commodity', $this->commodity])
            ->andFilterWhere(['like', 'location_coordinates', $this->location_coordinates]);

        return $dataProvider;
    }
}
