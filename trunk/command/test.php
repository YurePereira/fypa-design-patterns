<?php
function autoload($filename) {
    $path = './' . $filename . '.class.php';
    if (file_exists($path)) {
        include $path;
    }
}
spl_autoload_register("autoload");

$idao = new IDAO();
$d = new DeleteC($idao);
$r = new RegisterC($idao);

$crud = new CRUD($d);

$crud->doTask();

