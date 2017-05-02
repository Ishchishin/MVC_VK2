<?php

/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 28.04.2017
 * Time: 23:18
 */

namespace app\controllers;

class PostsNew {
    public function indexAction(){
        echo 'PostsNew:: index';
    }
    public function testAction(){
        echo 'PostsNew::  test';
    }
    public function testPageAction(){
        echo 'PostsNew::  testPage';
    }
    public function beforeAction(){
        echo 'PostsNew::  before';

    }
}