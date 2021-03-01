<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {
    
//    public function before() {
//        $this->view->layout = 'custom';
//    }

    public function loginAction() {
        //$this->view->redirect('/Framework/');
        if(!empty($_POST)) {
            $this->view->massage('error', 'Ошибка');
        }
        
        $this->view->render('логин');
    }

    public function registerAction() {
        //$this->view->path = 'test/test' chang path
        $this->view->render('Страница регистрации');
    }

}
