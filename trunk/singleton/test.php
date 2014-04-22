<?php
function autoload($class_name) {
    $path = $class_name . '.class.php';
    if (file_exists($path)) {
        require_once $path;
    }
}
spl_autoload_register('autoload');
$s = Singleton::getInstance();
echo $s->test();

//erro fatal
$s2 = new Singleton();
echo '<br />' . $s2->test();
