<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_wishlist".
 *
 * @property integer $wis_id
 * @property integer $user_id
 * @property integer $pro_id
 * @property integer $date_create
 * @property integer $status
 */
class Wishlist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_wishlist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'pro_id'], 'required'],
            [['user_id', 'pro_id', 'date_create', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wis_id' => 'Wis ID',
            'user_id' => 'User ID',
            'pro_id' => 'Pro ID',
            'date_create' => 'Date Create',
            'status' => 'Status',
        ];
    }
}
