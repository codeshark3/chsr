<?php


$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'index');

$match = $router->match();



if($match){
var_dump($match);
}else{
	header($_SERVER['SERVER_PROTOCOL'].'404 Not Found');
	echo "PAg not found";


}


// if($match){
// require_once __DIR__ . '/../controllers/BaseController.php';
// require_once __DIR__ . '/../controllers/IndexController.php';
// $index = new \App\Controllers\IndexControllers();
// }else{
// 	header($_SERVER['SERVER_PROTOCOL'].'404 Not Found');
// 	echo "PAg not found";}