<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use app\models\Product;

class scrollTabWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
	    
    }

    public function run()
    {
        $product = new Product();
        $newProduct = $product->getProductUpsell();
        return $this->render('scrollTabWidget',['newProduct'=>$newProduct]);
    }
}