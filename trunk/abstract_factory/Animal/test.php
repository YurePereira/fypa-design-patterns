<?php

function autoload($filename) {
    $path = './' . $filename . '.class.php';
    if (file_exists($path)) {
        include $path;
    }
}
spl_autoload_register("autoload");

$af = new AnimalFactory();
$g  = $af->createAnimal('Rato');
echo $g->emitirSom();