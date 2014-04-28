<?php

/**
 * Description of Conection:
 * Classes para conexão com banco de dados usando PDO e Singleton pattern
 *
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 *
 * @since 2014-04-21
 * 
 *
 */
final class Connection {

    const DRIVER = 'mysql:host=[host|ip];dbname=[basename]';
    const USERNAME = '[username]';
    const PASSWORD = '[password]';

    public static $instance;

    private static $opcoes = array(
        PDO::ATTR_ERRMODE => true,
        PDO::ERRMODE_EXCEPTION => true
    );

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {

		if (empty(self::$instance)) {
	        try {
	            self::$instance = new PDO(self::DRIVER, self::USERNAME, self::PASSWORD, self::$opcoes);
	            self::$instance->exec('set names utf8');
	            
	        } catch (PDOException $e) {
	            return 'Erro: ' . $e->getMessage();
	        }
		}
		return self::$instance;

    }

    private function __destruct() {
        self::$instance = null;
    }

}