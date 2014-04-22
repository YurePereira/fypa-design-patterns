<?php
class Model {
	public function isEmail($email) {
		$pattern = '/^([[:alnum:]|\.|_-]+)@([[:alnum:]|_-]+)\.([[:alnum:]]+)?\.?([[:alnum:]]+)/';
		return preg_match($pattern, $email);
	}

}