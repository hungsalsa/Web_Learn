<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Category;
class sideMenuWidget extends Widget
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
        $cat = new Category();
        $dataCat = $cat->getCategoryByParent();
        return $this->render('sideMenuWidget',['dataCat'=>$dataCat]);
    }
}