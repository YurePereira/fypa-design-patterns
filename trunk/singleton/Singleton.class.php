<?php

/**
 * Description of Singleton
 *
 * @author francisco.yure
 */
class Singleton {

    private static $instance;
    private function __construct() {}
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function test() {
        echo 'test';
    }
}
