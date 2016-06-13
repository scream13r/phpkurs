<?php

class Route {

    static function start(){

        // контроллер и действие по дефолту
        $controller_name = 'Main';
        $action_name = 'index';

        // http://mvc/controller/action
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // НЕ актуально для этого ДЗ: получаем контроллер
        /*if (!empty($routes[1])){
            $controller_name = $routes[1];
        }       */

        // получаем действие
        if (!empty($routes[1])){
            $action_name = $routes[1];
        }

        if (!empty($routes[2])){
            $param_url = $routes[2];
        }

        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        $model_file = strtolower($model_name).'.php';
        $model_path = "app/models/".$model_file;
        if(file_exists($model_path)){
            include $model_path;
        }

        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "app/controllers/".$controller_file;
        if(file_exists($controller_path)){
            include $controller_path;
        }else{
            Route::ErrorPage404();
        }

        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action)){
            $controller->param1 = $param_url;
            $controller->$action();
        }else{
            Route::ErrorPage404();
        }

    }

    static function ErrorPage404(){
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location:'.$host.'404');
    }
    
}