<?php
/**
 * Created by PhpStorm.
 * User: HungLD
 * Date: 16/06/2017
 * Time: 6:58 CH
 */
class MyClass{
    private $name="I'm a class property !";

    public function setProperty($newval){
        $this->name= $newval;
    }

    public function getProperty(){
        return $this->name."<br/>";
    }
    public function __toString()
    {
        echo "This is one object !";
    }
}

$obj = new MyClass;

//echo $obj->getProperty();

$obj->setProperty("I'm a new !!!");
echo $obj;
//echo $obj->getProperty();
//var_dump($obj);
//print_r($obj);