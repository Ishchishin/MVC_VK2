<?php

class Router
{
  //  public function _construct(){
  //      echo 'Hello';
  //  }

    protected static $routes= [];  //обявляем свойства  - таблица маршрутов
    protected static $route= [];   //обявляем свойства - текущий маршрут

    public static function add($regexp, $route=[]){   // метод add   --регулярное выражение из к.стр и текущий маршрут
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes (){               // таблица маршрутов
       return self::$routes;
    }

    public static function getRoute(){                // текущий маршрут
        return self::$route;
    }

    public static function matchRoute($url){
        foreach (self::$routes as $pattern => $route){
            if ($url==$pattern){
                self::$route = $route;
                return true;
            }
        }
        return false;
    }



}


