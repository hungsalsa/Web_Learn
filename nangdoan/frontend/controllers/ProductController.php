<?php

namespace frontend\controllers;
use app\models\Product;
use frontend\models\Category;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionListproduct($id)
    {
    	$data = new Product();
    	$dataProduct = $data->getProductByCatId($id);

		$dataCat = new Category();
    	$dataCate = $dataCat->getCategoryInfo($id);

        return $this->render('listproduct',['dataProduct'=>$dataProduct,'dataCate'=>$dataCate]);
        
    }

    public function actionDetail($id)
    {
    	$product = new Product();
    	$data = $product->getProductInfo($id);

		
    	$dataUpsell = $product->getProductUpsell();

        return $this->render('detail',['data'=>$data,'dataUpsell'=>$dataUpsell]);
    }
}
