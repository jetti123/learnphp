<?php

class Box {
    public $size;
    public static $number;

    public static function getNumber(){
        echo self::$number;
    }
    public function getSize(){
        echo $this->size . self::$number;
    }
    public static function me1(){
        var_dump(self::class);
    }
    public static function me2(){
        var_dump(static::class);
    } 
}

class MetalBox extends Box {

}

$box1 = new Box();
$box1->size = 10;
Box::$number = 10;
$box1->getSize();
Box::getNumber();
//$box2 = new Box();
//$box2->size = 20;
Box::$number = 20;
//var_dump($box1, $box2);
var_dump(Box::$number, Box::$number);
Box::me1();
Box::me2();
MetalBox::me1();
MetalBox::me2();