<?php

namespace app\models\esm;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\esm\Unitbarang;

/**
 * UnitbarangSearch represents the model behind the search form about `app\models\esm\Unitbarang`.
 */
class UnitbarangSearch extends Unitbarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qty', 'size', 'weight', 'status'], 'integer'],
            [['kdUnit', 'nmUnit', 'color', 'note', 'created_by', 'created_at', 'updated_at'], 'safe'],
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
            'qty' => $this->qty,
            'size' => $this->size,
            'weight' => $this->weight,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'kdUnit', $this->kdUnit])
            ->andFilterWhere(['like', 'nmUnit', $this->nmUnit])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at]);

        return $dataProvider;
    }
}
