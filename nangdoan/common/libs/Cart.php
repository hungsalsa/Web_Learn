<?php

namespace common\libs;
use app\models\Product;
use Yii;
use yii\web\Session;
/**
* 
*/
class Cart
{	
	function addCart($id,$number=1)
	{
		$data = new Product();
		$dataProduct = $data->getProductInfo($id);
		if(!isset(Yii::$app->session['cart'])){
			$cart[$id] = array(
				'name'=>$dataProduct['productName'],
				'price'=>$dataProduct['price'],
				'quanlity'=>$number,
				'size'=>$dataProduct['size'],
				'color'=>$dataProduct['color'],
			);
		}else{
			$cart = Yii::$app->session['cart'];
			if(array_key_exists($id,$cart)){
				$cart[$id] = array(
					'name'=>$dataProduct['productName'],
					'price'=>$dataProduct['price'],
					'quanlity'=>(int)$cart[$id]['quanlity'] + $number,
					'size'=>$dataProduct['size'],
					'color'=>$dataProduct['color'],
				);
			}else {
				$cart[$id] = array(
					'name'=>$dataProduct['productName'],
					'price'=>$dataProduct['price'],
					'quanlity'=>$number,
					'size'=>$dataProduct['size'],
					'color'=>$dataProduct['color'],
				);
			}
		}

		Yii::$app->session['cart'] = $cart;
	}
}