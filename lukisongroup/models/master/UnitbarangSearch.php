<?php

namespace app\models\master;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\master\Unitbarang;

/**
 * UnitbarangSearch represents the model behind the search form about `app\models\master\Unitbarang`.
 */
class UnitbarangSearch extends Unitbarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['kd_unit', 'nm_unit', 'size', 'color', 'note', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'safe'],
            [['wight'], 'number'],
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
        $query = Unitbarang::find();

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
            'wight' => $this->wight,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'kd_unit', $this->kd_unit])
            ->andFilterWhere(['like', 'nm_unit', $this->nm_unit])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
