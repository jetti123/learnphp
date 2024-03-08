<?php

class Box {
    private $weight;
    public function getWeight(){
        return $this->weight . 'kg';
    }
    public function setWeight($weight){
        if($weight > 0){
            $this->weight = $weight;
        } else {
            throw new Exception('Negative Mass error');
        }
    }
    
}

//sb else code

$box = new Box();
$box->setWeight (-10);
var_dump($box);