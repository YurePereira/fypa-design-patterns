<?php

class Dozen extends ConverterRomanNumerals {

	private $dozen;

	function __construct() {
		$this->numberUnit = 10;
		$this->dozen = array(
			'X',
			'XX',
			'XXX',
			'XL',
			'L',
			'LX',
			'LXX',
			'LXXX',
			'XC'
		);
	}

	public function convert($number) {

		if ($number >= 10 && $number < 100) {
			return $this->toRoman($number);
		} else {
			$this->setSuccessor(new Hundred());
			return $this->getSuccessor()->convert($number);
		}

	}

	protected function toRoman($number) {
		$u = new Unit();
		if ($number % $this->numberUnit == 0) {
			return $this->dozen[($number / $this->numberUnit) - 1];
		} else {
			return $this->dozen[($number / $this->numberUnit) - 1] . $u->convert($number % $this->numberUnit);
		}
	}
	
}