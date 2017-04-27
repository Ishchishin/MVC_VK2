<?php


$query = $_SERVER['QUERY_STRING'];                                    //получаем строку запроса

require '../vendor/core/Router.php';                                 //подключаем клас
require '../vendor/libs/functions.php';                              //подключаем библиотеку функций

Router:: add('posts/add',['conttoller'=>'Posts','action'=> 'add']) ;  //  правила
Router:: add('posts/',['conttoller'=>'Posts','action'=> 'index']) ;
Router:: add('',['conttoller'=>'Main','action'=> 'index']) ;



debag(Router::getRoutes());

if (Router::matchRoute($query)){
    debag(Router::getRoute());
}else{
    echo '404';
}

