<?php

namespace lukisongroup\models\master\berita_acara;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use lukisongroup\models\master\berita_acara\A1000;

/**
 * A1000Search represents the model behind the search form about `app\models\sss\A1000`.
 */
class A1000Search extends A1000
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['kd_berita', 'judul', 'isi', 'kd_corp', 'kd_cab', 'kd_dep', 'data_pict', 'data_file', 'time_at', 'created_at', 'created_by', 'updated_at', 'data_all'], 'safe'],
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
        $query = A1000::find();

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
            'time_at' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'kd_berita', $this->kd_berita])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'kd_corp', $this->kd_corp])
            ->andFilterWhere(['like', 'kd_cab', $this->kd_cab])
            ->andFilterWhere(['like', 'kd_dep', $this->kd_dep])
            ->andFilterWhere(['like', 'data_pict', $this->data_pict])
            ->andFilterWhere(['like', 'data_file', $this->data_file])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'data_all', $this->data_all]);

        return $dataProvider;
    }
}
