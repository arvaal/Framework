<?php

namespace application\core;

class View {

    public $path;
    public $layaut = 'default';
    public $route;

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = []) {
        ob_start();
        require 'application/views/' . $this->path . '.php';
        $content = ob_get_clean();
        require 'application/views/layout/' . $this->layaut . '.php';
    }

}
