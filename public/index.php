<?php


$query = $_SERVER['QUERY_STRING'];

require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';

Router:: add('posts/add',['conttoller'=>'Posts','action'=> 'add']) ;
Router:: add('posts/',['conttoller'=>'Posts','action'=> 'index']) ;
Router:: add('',['conttoller'=>'Main','action'=> 'index']) ;



debag(Router::getRoutes());

if (Router::matchRoute($query)){
    debag(Router::getRoute());
}else{
    echo '404';
}

