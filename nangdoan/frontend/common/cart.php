<?php
/**
* 
*/
namespace frontend\common;
use Yii;
use yii\web\Session;
class cart
{
	
	
	function addCart($id,$arrData)
	{
		$session =  Yii::$app->session;
		// $session = Yii::$app->session;
		// echo "<pre>";print_r($session); var_dump($session); die();
		if(!isset($session['cart'])){
			$cart[$id] = array(
					"productName"=>$arrData["productName"],
					"price"=>$arrData["price"],
					"priceSale"=>$arrData["priceSale"],
					"image"=>$arrData["image"],
					"amount"=>1,
			);
		}else{
			$cart = $session['cart'];
			if(array_key_exists($id,$cart)){
				$cart[$id] = array(
						"productName"=>$arrData["productName"],
						"price"=>$arrData["price"],
						"priceSale"=>$arrData["priceSale"],
						"image"=>$arrData["image"],
						"amount"=>$cart[$id]["amount"]+1,
				);
			}else {
				$cart[$id] = array(
					"productName"=>$arrData["productName"],
					"price"=>$arrData["price"],
					"priceSale"=>$arrData["priceSale"],
					"image"=>$arrData["image"],
					"amount"=>1,
				);
			}
		}

		$session['cart'] = $cart;
	}
}