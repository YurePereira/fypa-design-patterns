<?php
header('Content-type: text/html;charset=utf-8');
require_once('Model.class.php');
require_once('View.class.php');
require_once('Controller.class.php');

$controller = new Controller();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$controller->showForm();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['txt_email'])) {
		if (!empty($_POST['txt_nome'])) {
			echo 'Nome correto.<br />';
		} else {
			echo 'Nome não inserido.<br />';
		}
		if (!empty($_POST['txt_email'])) {
			if ($controller->checkEmail($_POST['txt_email'])) {
				echo 'Email válido.';
			} else {
				echo 'Email inválido.';
			}
		} else {
			echo 'Email não inserido.';
		}
	}
	unset($_POST);
}