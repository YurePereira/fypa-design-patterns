<?php
class Controller {
	private $model;
	private $view;

	public function __construct() {
		$this->model = new Model();
		$this->view = new View();
	}

	public function checkEmail($email) {
		return $this->model->isEmail($email);
	}

	public function showForm() {
		$this->view->showView();
	}
}