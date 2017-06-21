<?php
namespace frontend\controllers;

use common\libs\Cart;
use Yii;
use yii\web\Session;
use app\models\Product;

class ShoppingController extends \yii\web\Controller
{
     public function actionAddcart($id,$num)
    {
    	$cart = new Cart();
    	$cart->addCart($id,$num);
    	echo "<pre>";
		print_r(Yii::$app->session['cart']);
		die();

    }

    public function actionAaa(){
    	$session = Yii::$app->session;
		$session->set('123', '1234');
echo "<pre>";
		var_dump($session);
		die();
    }
}
