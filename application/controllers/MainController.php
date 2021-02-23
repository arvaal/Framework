<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {

    public function indexAction() {
        //$vars = [
        //    'name' => 'Ваган',
        //    'age' => 36
        //];
        //$this->view->render('Главная страница', $vars);
        
        $db = new Db();
        $data = $db->row('SELECT name FROM users');
        debug($data);
        
        $this->view->render('Главная страница');
    }

}
