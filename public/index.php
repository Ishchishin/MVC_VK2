<?php


$query = $_SERVER['QUERY_STRING'];                                    //получаем строку запроса

require '../vendor/core/Router.php';                                 //подключаем клас
require '../vendor/libs/functions.php';                              //подключаем библиотеку функций

require '../app/controllers/Main.php';                              //подключаем библиотеку функций
require '../app/controllers/Posts.php';                              //подключаем библиотеку функций
require '../app/controllers/PostsNew.php';                              //подключаем библиотеку функций

//Router:: add('posts/add',['conttoller'=>'Posts','action'=> 'add']) ;  //  правила
//Router:: add('posts/',['conttoller'=>'Posts','action'=> 'index']) ;
//Router:: add('',['conttoller'=>'Main','action'=> 'index']) ;

Router::add('^$',['controller' => 'Main', 'action'=> 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');



debag(Router::getRoutes());
Router::dispatch($query);

//if (Router::matchRoute($query)){
//    debag(Router::getRoute());
//}else{
//    echo '404';
//}

