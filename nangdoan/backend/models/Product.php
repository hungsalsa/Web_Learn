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
            [['productName', 'keyword', 'description', 'content', 'group_ID', 'cateID', 'created_at', 'updated_at'], 'required','message'=>'{attribute} không được để trống'],
            [['price', 'saleOf', 'priceSale', 'quanlity', 'evaluation', 'group_ID', 'cateID', 'suppliresID', 'userID', 'status', 'created_at', 'updated_at'], 'integer','message'=>'{attribute} phải là số'],
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
            'proID' => 'Mã',
            'productName' => 'Tên sản phẩm',
            'price' => 'Giá sản phẩm',
            'saleOf' => 'Giảm giá',
            'startSale' => 'Ngày bắt đầu giảm giá',
            'endSale' => 'Ngày kết thúc giảm giá',
            'priceSale' => 'Giá sau giảm',
            'quanlity' => 'số lượng',
            'size' => 'Kích cỡ',
            'color' => 'Mầu sắc',
            'evaluation' => 'Đánh giá',
            'image' => 'Ảnh sản phẩm',
            'keyword' => 'Từ khóa ',
            'description' => 'Mô tả',
            'content' => 'Chi tiết sản phẩm',
            'group_ID' => 'Nhóm danh mục',
            'cateID' => 'Danh mục',
            'suppliresID' => 'Nhà cung cấp',
            'userID' => 'User ID',
            'status' => 'Hiển thị',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
