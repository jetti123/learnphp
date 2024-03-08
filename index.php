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

class MetalBox extends Box {
    public $material = 'Metal';
    public $weight;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }

}

trait HasSmell {
    public $smell;
    public function sniff(){
        if($this->smell !=='Bad'){
            return 'Fine';
        }
        return 'Bad';
    }
}

$box1 = new Box();
var_dump($box1);
$metalBox1 = new MetalBox();
var_dump($metalBox1);