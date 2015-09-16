<?php

namespace app\models\master;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\master\Suplier;

/**
 * SuplierSearch represents the model behind the search form about `app\models\esm\Suplier`.
 */
class SuplierSearch extends Suplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['kd_supplier', 'nm_supplier', 'alamat', 'kota', 'tlp', 'mobile', 'fax', 'email', 'website', 'image', 'note', 'kd_corp', 'kd_cab', 'kd_dep', 'created_by', 'created_at', 'updated_by', 'updated_at', 'data_all'], 'safe'],
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
        $query = Suplier::find();

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
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'kd_supplier', $this->kd_supplier])
            ->andFilterWhere(['like', 'nm_supplier', $this->nm_supplier])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'tlp', $this->tlp])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'kd_corp', $this->kd_corp])
            ->andFilterWhere(['like', 'kd_cab', $this->kd_cab])
            ->andFilterWhere(['like', 'kd_dep', $this->kd_dep])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
            ->andFilterWhere(['like', 'data_all', $this->data_all]);

        return $dataProvider;
    }
}
