<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {

    public function indexAction() {
        
        $result = $this->model->getNews();
        
        $vars = [
            'h1' => 'Главная страница',
            'news' => $result
        ];
        
        $this->view->render('Главная страница', $vars);
    }

}
