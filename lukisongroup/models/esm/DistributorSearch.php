<?php

namespace app\models\esm;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\esm\Distributor;

/**
 * DistributorSearch represents the model behind the search form about `app\models\esm\Distributor`.
 */
class DistributorSearch extends Distributor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idDbtr', 'tlp1', 'tlp2', 'fax', 'status'], 'integer'],
            [['kdDbtr', 'nmDbtr', 'alamat', 'pic', 'email', 'website', 'note', 'createBy', 'createAt', 'updateAt', 'data_all'], 'safe'],
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
        $query = Distributor::find();

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
            'idDbtr' => $this->idDbtr,
            'tlp1' => $this->tlp1,
            'tlp2' => $this->tlp2,
            'fax' => $this->fax,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'kdDbtr', $this->kdDbtr])
            ->andFilterWhere(['like', 'nmDbtr', $this->nmDbtr])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'pic', $this->pic])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'createBy', $this->createBy])
            ->andFilterWhere(['like', 'createAt', $this->createAt])
            ->andFilterWhere(['like', 'updateAt', $this->updateAt])
            ->andFilterWhere(['like', 'data_all', $this->data_all]);

        return $dataProvider;
    }
}
