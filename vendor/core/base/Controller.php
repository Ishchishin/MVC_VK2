<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 03.05.2017
 * Time: 0:11
 */

namespace vendor\core\base;


abstract class Controller
{
    public $route = [];
    public function __construct($route){
        $this->route = $route;
    }

}