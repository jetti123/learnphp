<?php

class Box {
    public $width;
    public $height;
    public $length;
    public $material;

    public function describe(){
        echo 'width:' . $this->width . 'height:' . $this->height . 'length:' . $this->length;
    }

}

$num1 = 4;
$num2 = $num1;
$num2 = 7;
var_dump($num1, $num2);


$box1 = new Box();
$box1->height = 4;
$box2 = clone $box1;
$box2->height = 7;
var_dump($box1, $box2);
$box1->describe();
