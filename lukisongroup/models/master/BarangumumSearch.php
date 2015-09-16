<?php

namespace app\models\master;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\master\Barangumum;

/**
 * BarangumumSearch represents the model behind the search form about `app\models\master\Barangumum`.
 */
class BarangumumSearch extends Barangumum
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['kd_barang', 'nm_barang', 'kd_type', 'kd_kategori', 'kd_unit', 'kd_supplier', 'kd_distributor', 'parent', 'barcode', 'image', 'note', 'kd_corp', 'kd_cab', 'kd_dep', 'created_by', 'created_at', 'updated_by', 'updated_at', 'data_all'], 'safe'],
            [['hpp', 'harga'], 'number'],
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
        $query = Barangumum::find();

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
            'hpp' => $this->hpp,
            'harga' => $this->harga,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'kd_barang', $this->kd_barang])
            ->andFilterWhere(['like', 'nm_barang', $this->nm_barang])
            ->andFilterWhere(['like', 'kd_type', $this->kd_type])
            ->andFilterWhere(['like', 'kd_kategori', $this->kd_kategori])
            ->andFilterWhere(['like', 'kd_unit', $this->kd_unit])
            ->andFilterWhere(['like', 'kd_supplier', $this->kd_supplier])
            ->andFilterWhere(['like', 'kd_distributor', $this->kd_distributor])
            ->andFilterWhere(['like', 'parent', $this->parent])
            ->andFilterWhere(['like', 'barcode', $this->barcode])
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
