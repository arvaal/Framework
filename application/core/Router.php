<?php

namespace application\core;

class Router {
    
    protected $routes = [];
    protected $params = [];


    public function __construct() {
        $arr = require 'application/config/Routes.php';
        
        foreach ($arr as $key => $value) {
            $this->add($key, $value);
        }
        
    }
    
    public function add($route, $params) {
        $route = '#^' . $route . '$#';
        
        $this->routes[$route] = $params;
    }
    
    public function match () {
        $url = trim(str_replace('Framework/', '', $_SERVER['REQUEST_URI']), '/');
        
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                
                return true;
            }
        }
        
        return false;
    }
    
    public function run() {
        if($this->match()) {
            $controller = 'application/controllers/' . ucfirst($this->params['controller']) . 'Controller.php';
            
            if (class_exists($controller)) {
                //
            } else {
                echo 'Не найден класс: ' . $controller;
            }
        } else {
            echo 'Маршрут не найден';
        }
    }
    
}

