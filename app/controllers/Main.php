<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 28.04.2017
 * Time: 23:07
 */

namespace app\controllers;

class Main {
    public function indexAction(){
        echo 'Main:: index';
    }
    public function testAction(){
        echo 'Main::  test';
    }
    public function testPageAction(){
        echo 'Main::  testPage';
    }
    public function beforeAction(){
        echo 'Main::  before';

    }

}