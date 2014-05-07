<?php
/**
 * 
 *
 *
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 * @since 2014-05-06
 * 
 */
abstract class User {

	abstract public function login($key, $username = null, $password = null);

}