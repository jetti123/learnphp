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

$box1 = new Box();
$box1->width = 1;
$box1->height = 2;
$box1->length = 3;
$box1->material = 'wood';
var_dump($box1);
$box1 = new Box();
$box1->width = 5;
$box1->height = 6;
$box1->length = 7;
$box1->material = 'metal';
var_dump($box2);
var_dump($box1);