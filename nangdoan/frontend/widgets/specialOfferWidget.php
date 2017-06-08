<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use app\models\Product;

class specialOfferWidget extends Widget
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
        $ranData = new Product();
        $ranData = $ranData->getRandomProduct();
        return $this->render('specialOfferWidget',['ranData'=>$ranData]);
    }
}