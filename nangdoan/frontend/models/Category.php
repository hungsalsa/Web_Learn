<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_category".
 *
 * @property integer $idCate
 * @property string $icon
 * @property string $cateName
 * @property integer $parent_id
 * @property string $keywords
 * @property string $description
 * @property integer $order
 * @property integer $group_ID
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cateName', 'keywords', 'description', 'order', 'group_ID', 'created_at', 'updated_at'], 'required'],
            [['parent_id', 'order', 'group_ID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['icon', 'cateName', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCate' => 'Id Cate',
            'icon' => 'Icon',
            'cateName' => 'Cate Name',
            'parent_id' => 'Parent ID',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'order' => 'Order',
            'group_ID' => 'Group  ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCategoryInfo($id){
        return  Category::find()->asArray()->where('idCate=:idcat and status=:status',['idcat'=>$id,'status'=>'1'])->one();
        
    }

    public function getCategoryByParent($parent=0,$group=1,$status=1){
        $data = Category::find()->asArray()->where('parent_id=:parent and group_ID=:group and status=:status',['parent'=>$parent,'group'=>$group,'status'=>$status])->all();
        return $data;
    }
}
