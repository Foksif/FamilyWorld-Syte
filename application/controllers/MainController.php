<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		$this->view->render('FamilyWorld');
	}
	public function aboutAction() {
		$this->view->render('Информация');
	}
	public function faqsAction() {
		$this->view->render('FAQS');
	}
	public function rulesAction() {
		$this->view->render('RULES');
	}
}