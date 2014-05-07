<?php
/**
 * 
 *
 *
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 * @since 2014-05-06
 * 
 */
class ProfessorUser extends User {

	public function login($key, $username = null, $password = null) {

		echo 'CLASS: ' . __CLASS__ . '<br />';
		echo 'KEY: ' . $key . '<br />';
		echo 'USERNAME: ' . $username . '<br />';
		echo 'PASSWORD: ' . $password . '<br />';

	}

}