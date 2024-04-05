<?php
namespace App; //Tavaliselt kasutatakse projekti nime

class Router{
    private static $routes = [];
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route['path'] === $this->path){
                return $route; //lopetab funktsiooni
            }

        }
    }

    public static function addRoute ($path, $action){
        self::$routes[] = ['path' => $path, 'action' => $action];
    }

}