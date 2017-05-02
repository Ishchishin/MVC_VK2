<?php


error_reporting(-1);

use vendor\core\Router;


$query = rtrim ($_SERVER['QUERY_STRING'], '/');                                    //получаем строку запроса
define('www', __DIR__);
define('CORE',dirname( __DIR__) . '/vendor/core');
define('ROOT',dirname( __DIR__) );
define('APP',dirname( __DIR__) . '/app');

//require '../vendor/core/Router.php';                                 //подключаем клас
require '../vendor/libs/functions.php';                              //подключаем библиотеку функций

//require '../app/controllers/Main.php';                              //подключаем библиотеку функций
//require '../app/controllers/Posts.php';                              //подключаем библиотеку функций
//require '../app/controllers/PostsNew.php';                              //подключаем библиотеку функций
spl_autoload_register(function ($class){
    $file = ROOT . '/' . str_replace('\\','/', $class) . '.php';
//    $file = APP . "/controllers/$class.php";
    if (is_file($file)){
        require_once $file;
    }
});

//Router:: add('posts/add',['conttoller'=>'Posts','action'=> 'add']) ;  //  правила
//Router:: add('posts/',['conttoller'=>'Posts','action'=> 'index']) ;
//Router:: add('',['conttoller'=>'Main','action'=> 'index']) ;

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',['controller' => 'Page', 'action'=> 'index']);
// Правила по умолчанию
Router::add('^$',['controller' => 'Main', 'action'=> 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');



debag(Router::getRoutes());
Router::dispatch($query);

//if (Router::matchRoute($query)){
//    debag(Router::getRoute());
//}else{
//    echo '404';
//}

