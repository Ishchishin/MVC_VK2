<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 28.04.2017
 * Time: 23:08
 */

namespace app\controllers;

class Posts {

    public $route = [];
    public function _construct($route){
        $this->route = $route;
    }

    public function indexAction(){
        debag($this->route);
        echo 'Posts::  index';
    }
    public function testAction(){
        debag($this->route);
        echo 'Posts::  test';
    }
    public function testPageAction(){
        echo 'Posts::  testPage';
    }
    public function beforeAction(){
        echo 'Posts::  before';

    }


}