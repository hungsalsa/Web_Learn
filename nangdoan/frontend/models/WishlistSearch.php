<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Wishlist;

/**
 * WishlistSearch represents the model behind the search form about `frontend\models\Wishlist`.
 */
class WishlistSearch extends Wishlist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wis_id', 'user_id', 'pro_id', 'date_create', 'status'], 'integer'],
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
        $query = Wishlist::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'wis_id' => $this->wis_id,
            'user_id' => $this->user_id,
            'pro_id' => $this->pro_id,
            'date_create' => $this->date_create,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
