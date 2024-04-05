<?php
// var_dump($_SERVER);
// require_once 'src/Router1.php';
// require_once 'src/DB.php';
// require_once 'src/controllers/PublicController.php';

spl_autoload_register(function($class){
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    var_dump($class);
    require_once "src/$class.php";
});

// use App\Controllers\PublicController as PC;

use App\Router;

require'routes.php';

Router::addRoute('/', function(){
    include 'views/index.php';
});
Router::addRoute('/page1', function(){
    include 'views/page1.php';
});
Router::addRoute('/page2', function(){
    include 'views/page2.php';
});

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match(); //kysime routeri kaest matchi
if($match){
    if(is_callable($match['action'])){
        call_user_func($match['action']);  //kaivitab funktsiooni
    } else if (is_array($match['action'])){
        $class = $match['action'][0];
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    }
} else {
    echo 404;
}




// $router = new App\Router();
// var_dump($router);
// $db = new App\DB();
// var_dump($db);
// $contreller = new PC();
// var_dump($controller);
// $contreller = new PC();
// var_dump($controller);
// $contreller = new PC();
// var_dump($controller);

//switch($_SERVER['REQUEST_URI']){
//    case '/':
//        include 'views/index.php';
 //       break;
 //   case '/page1':
 //       include 'views/Page1.php';
//        break;
 //   case '/page2':
//        include 'views/Page2.php';
//        break;
//    default:
 //       echo 404;
//}