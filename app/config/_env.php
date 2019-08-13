<?php


define('BASE_PATH', realpath(__DIR__.'/../../'));
require_once '..\..\vendor\autoload.php';


$dotenv = new Dotenv\Dotenv(BASE_PATH);
 // if(file_exists(".env")) {
 //    $dotenv->load();
 // }

 $dotenv->load();
// // define('BASE_PATH', realpath(__DIR__.'/../../'));
// define("ROOT", __DIR__ . "/");


// // Autoloader
// $loader = (require __DIR__ . '\vendor\autoload.php');
// // Load our environment variables
// $dotenv = new Dotenv\Dotenv(__DIR__);


//  // $dotEnv = new Dotenv\Dotenv(__DIR__);
// // $dotenv =  new Dotenv\Dotenv::create(__DIR__);

// 

// $dotenv = new Dotenv\Dotenv(__DIR__);
// if(file_exists(".env")) {
//     $dotenv->load();
// }

// $dotenv = Dotenv\Dotenv::create(__DIR__);
// $dotenv->load();