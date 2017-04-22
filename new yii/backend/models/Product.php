<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $proID
 * @property string $productName
 * @property integer $price
 * @property integer $saleOf
 * @property integer $startSale
 * @property integer $endSale
 * @property integer $priceSale
 * @property integer $quanlity
 * @property integer $size
 * @property integer $color
 * @property integer $evaluation
 * @property string $image
 * @property string $keyword
 * @property string $description
 * @property string $content
 * @property integer $groups
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
            [['productName', 'keyword', 'description', 'content', 'cateID', 'created_at', 'updated_at','groups'], 'required','message'=>'{attribute} không được để trống'],
            [['price', 'saleOf', 'priceSale', 'quanlity', 'evaluation', 'groups', 'cateID', 'suppliresID', 'userID', 'status', 'created_at', 'updated_at'], 'integer','message'=>'{attribute} phải là số'],
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
            'productName' => 'Tên sản phẩm',
            'price' => 'Giá sản phẩm',
            'saleOf' => 'Giảm giá',
            'startSale' => 'Thời gian bắt đầu giảm',
            'endSale' => 'Thời gian kết thúc giảm',
            'priceSale' => 'Giá bán',
            'quanlity' => 'Số lượng',
            'size' => 'Cỡ',
            'color' => 'Mầu',
            'evaluation' => 'Evaluation',
            'image' => 'Ảnh sản phẩm',
            'keyword' => 'Keyword',
            'description' => 'Description',
            'content' => 'Thông tin sản phẩm',
            'groups' => 'Nhóm',
            'cateID' => 'Danh mục',
            'suppliresID' => 'Supplires ID',
            'userID' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
