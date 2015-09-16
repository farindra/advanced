<?php

namespace app\models\esm;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\esm\Barang;

/**
 * BarangSearch represents the model behind the search form about `app\models\esm\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hpp', 'harga', 'barcode', 'note', 'status', 'createdBy', 'createdAt', 'updateAt'], 'integer'],
            [['kdBrg', 'nmBrg', 'kdSuplier', 'kdDbtr', 'data_all'], 'safe'],
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
        $query = Barang::find();

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
            'barcode' => $this->barcode,
            'note' => $this->note,
            'status' => $this->status,
            'createdBy' => $this->createdBy,
            'createdAt' => $this->createdAt,
            'updateAt' => $this->updateAt,
        ]);

        $query->andFilterWhere(['like', 'kdBrg', $this->kdBrg])
            ->andFilterWhere(['like', 'nmBrg', $this->nmBrg])
            ->andFilterWhere(['like', 'kdSuplier', $this->kdSuplier])
            ->andFilterWhere(['like', 'kdDbtr', $this->kdDbtr])
            ->andFilterWhere(['like', 'data_all', $this->data_all]);

        return $dataProvider;
    }
}
