<?php


namespace vendor\core;

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
    /**  Ищет url в таблице маршрутов
     * @param string $url входящий URL
     * @return boolean
     */
    public static function matchRoute($url){
        foreach (self::$routes as $pattern => $route){
            //if ($url==$pattern){
            if (preg_match("#$pattern#i", $url, $matches)){
               // debag($matches);
                foreach ($matches as $k => $v){
                    if (is_string($k)){
                        $route[$k] = $v;
                    }
                }
                if (!isset($route['action'])){
                    $route['action'] = 'index';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                //debag($route);
                return true;
            }
        }
        return false;
    }

    /**  Перанаправляем url по корректному маршруту
     * @param string $url входящий URL
     * @return void
     */
    public static function dispatch($url){
        if (self::matchRoute($url)){
            $controller = 'app\controllers\\' . self::$route['controller'];
            ///debag(self::$route);
            if (class_exists($controller)){
                $cObj = new $controller(self::$route);
                $action =self::lowerCamelCase(self::$route['action'] . 'Action');
                if (method_exists($cObj,$action)){
                    $cObj->$action();
                }else{
                    echo "Meтод <b>$controller::$action</b> не найден";
                }
            }else{
                echo "Контроллер <b>$controller</b> не найден ";
            }
        }else{
            http_response_code(404);
            include '404.html';
        }
    }
    protected static function upperCamelCase($name){
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));

    }
    protected static function lowerCamelCase($name){
        return lcfirst(self::upperCamelCase($name));

    }

}


