<?php

namespace application\core;

class View {

    public $path;
    public $layout = 'default';
    public $route;

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = []) {

        extract($vars);
        
        $path = 'application/views/' . $this->path . '.php';

        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/views/layout/' . $this->layout . '.php';
        } else {
            self::errorCode(500);
        }
    }
    
    public static function errorCode($code) {
        http_response_code($code);
        $path = 'application/views/errors/' . $code . '.php';;
        require $path;
        exit;
    }
    
    public function redirect($url) {
        header('location: ' . $url);
        exit;
    }
    
    public function massage($status, $massage) {
        exit(json_encode(['status' => $status, 'nassage' => $massage]));
    }
    
    public function location($url) {
        exit(json_encode(['url' => $url]));
    }

}
