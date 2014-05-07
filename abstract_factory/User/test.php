<?php
function autoload($filename) {
    $path = './' . $filename . '.class.php';
    if (file_exists($path)) {
        include $path;
    }
}
spl_autoload_register("autoload");

$factory = new FactoryUser();
$aluno = $factory->createUser('aluno');
$aluno->login('=cddvdv=', 'Yure', 'degfejd==');
echo '<br />';
$professor = $factory->createUser('professor');
$professor->login('=cddvdv=', 'Yure', 'degfejd==');
echo '<br />';
$diretor = $factory->createUser('diretor');
$diretor->login('=cddvdv=', 'Yure', 'degfejd==');
echo '<br />';