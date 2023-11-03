<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
		$this->view->render('Вход');

		if (!empty($_POST)) {
			$this->view->message('Ура', 'всё работает');
		}
	}

	public function registerAction() {
		$this->view->render('Регистрация');
	}

}