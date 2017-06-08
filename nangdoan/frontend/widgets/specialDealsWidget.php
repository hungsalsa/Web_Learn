<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use app\models\Product;

class specialDealsWidget extends Widget
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
        $Data = new Product();
        $ranData = $Data->getRandomProduct();
        return $this->render('specialDealsWidget',['ranData'=>$ranData]);
    }
}