<?php

namespace backend\models;

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

    public $data;
    public function getCategoryParent($parent = 0, $level =""){
        $result = Category::find()->asArray()->where('parent_id=:parent',['parent'=>$parent])->all();
        // Tim tat ca cac 
        $level .=" -";
        foreach ($result as $key => $value) {
            if($parent == 0){
                $level = "";
            }
            $this->data[$value["idCate"]] = $level.$value["cateName"];
            self::getCategoryParent($value['idCate'],$level);
        }
        return $this->data;
    }

    public function getAllCategory(){
        $data = Category::find()
                ->where(['status'=>'1'])
                ->orderBy('cateName')
                ->all();
        return ArrayHelper::map($data, 'idCate' , 'cateName');
    }

// Test lay ra sub cate khi co Group_ID
    public function getAllCategory_byGroupId($groupId=''){
        $data = Category::find()
                ->where(['status'=>'1','group_ID'=>$groupId])
                ->orderBy('cateName')
                ->all();
        return ArrayHelper::map($data, 'idCate' , 'cateName');
    }
}
