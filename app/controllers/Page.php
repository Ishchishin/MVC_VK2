<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 03.05.2017
 * Time: 0:20
 */

namespace app\controllers;


class Page extends \vendor\core\base\Controller
{
    public function viewAction()
    {
        debag($this->route);
        echo 'Page:: view';


    }
}