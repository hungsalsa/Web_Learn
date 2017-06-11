<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $proID
 * @property string $productName
 * @property integer $price
 * @property integer $saleOf
 * @property string $startSale
 * @property string $endSale
 * @property integer $priceSale
 * @property integer $quanlity
 * @property string $size
 * @property string $color
 * @property integer $evaluation
 * @property string $image
 * @property string $keyword
 * @property string $description
 * @property string $content
 * @property integer $group_ID
 * @property integer $cateID
 * @property integer $suppliresID
 * @property integer $userID
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productName', 'keyword', 'description', 'content', 'group_ID', 'cateID', 'created_at', 'updated_at'], 'required'],
            [['price', 'saleOf', 'priceSale', 'quanlity', 'evaluation', 'group_ID', 'cateID', 'suppliresID', 'userID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['startSale', 'endSale'], 'safe'],
            [['description', 'content'], 'string'],
            [['productName', 'size', 'color', 'image', 'keyword'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proID' => 'Pro ID',
            'productName' => 'Product Name',
            'price' => 'Price',
            'saleOf' => 'Sale Of',
            'startSale' => 'Start Sale',
            'endSale' => 'End Sale',
            'priceSale' => 'Price Sale',
            'quanlity' => 'Quanlity',
            'size' => 'Size',
            'color' => 'Color',
            'evaluation' => 'Evaluation',
            'image' => 'Image',
            'keyword' => 'Keyword',
            'description' => 'Description',
            'content' => 'Content',
            'group_ID' => 'Group  ID',
            'cateID' => 'Cate ID',
            'suppliresID' => 'Supplires ID',
            'userID' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getRandomProduct($limit=9){
        return Product::find()->asArray()->orderBy('rand()')->limit($limit)->all();
    }

    public function getProductByCatId($id){
        return Product::find()->asArray()->where('cateID=:catid',['catid'=>$id])->all();
    }

    public function getProductInfo($id){
        return Product::find()->asArray()->where('proID=:proid and status=:status',['proid'=>$id,'status'=>'1'])->one();
    }

    public function getProductUpsell($limit=9){
        return Product::find()->asArray()->orderBy('updated_at DESC')->limit($limit)->all();
    }

    protected function get_list_set_input($input = array())
    {
        
        // Thêm điều kiện cho câu truy vấn truyền qua biến $input['where'] 
        //(vi du: $input['where'] = array('email' => 'hocphp@gmail.com'))
        if ((isset($input['where'])) && $input['where'])
        {
            return Product::find()->asArray()->where($input['where'])->all();
            // $this->db->where($input['where']);
        }
/*
tu lam
*/
        // Thêm điều kiện cho câu truy vấn truyền qua biến $input['where_in'] 
        //(vi du: $input['where_in'] = array('email' => array(10, 11, 12)))
        if ((isset($input['where_in'])) && $input['where_in'])
        {
            return Product::find()->asArray()->where($input['where'])->all();
            // $customers = Customer::find()->where(['id' => [10, 11, 12]])->all();
            // $this->db->where_in($input['where_in']);
        }
/*
tu lam
*/      
        //tim kiem like
        // $input['like'] = array('name' , 'abc');
        // if ((isset($input['like'])) && $input['like'])
        // {
        //     $this->db->like($input['like'][0], $input['like'][1]); 
        // }

        //tim kiem or_like
        // $input['or_like'] = array('name' => 'abc','id' => '1');
     //    if ((isset($input['or_like'])) && $input['or_like'])
        // {
        //  $this->db->or_like($input['or_like'][0], $input['or_like'][1]); 
        // }
        
        // Thêm sắp xếp dữ liệu thông qua biến $input['order'] 
        //(ví dụ $input['order'] = array('id','DESC'))
        if (isset($input['order'][0]) && isset($input['order'][1]))
        {
            $this->db->order_by($input['order'][0], $input['order'][1]);
        }
        else
        {
            //mặc định sẽ sắp xếp theo id giảm dần 
            $order = ($this->order == '') ? array($this->table.'.'.$this->key, 'desc') : $this->order;
            $this->db->order_by($order[0], $order[1]);
        }
        
        // Thêm điều kiện limit cho câu truy vấn thông qua biến $input['limit'] 
        //(ví dụ $input['limit'] = array('10' ,'0')) 
        // if (isset($input['limit'][0]) && isset($input['limit'][1]))
        // {
        //     $this->db->limit($input['limit'][0], $input['limit'][1]);
        // }
        
    }
}
