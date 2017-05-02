<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 28.04.2017
 * Time: 23:08
 */

namespace app\controllers;

use vendor\core\base\Controller;

class Posts extends Controller {


    public function indexAction(){
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