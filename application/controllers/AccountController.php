<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {
    
//    public function before() {
//        $this->view->layout = 'custom';
//    }

    public function loginAction() {
        //$this->view->redirect('/Framework/');
        $this->view->render('Страница логина');
    }

    public function registerAction() {
        //$this->view->path = 'test/test' chang path
        $this->view->render('Страница регистрации');
    }

}
