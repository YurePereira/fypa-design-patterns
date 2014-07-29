<?php

class Hundred extends ConverterRomanNumerals {

	private $hundred;

	function __construct() {
		$this->numberUnit = 100;
		$this->hundred = array(
			'C',
			'CC',
			'CCC',
			'CD',
			'D',
			'DC',
			'DCC',
			'DCCC',
			'CM',
		);
	}

	public function convert($number) {

		if ($number >= 100 && $number < 1000) {
			return $this->toRoman($number);
		} else {
			$this->setSuccessor(new Thousand());
			return $this->getSuccessor()->convert($number);
		}

	}

	protected function toRoman($number) {
		$u = new Unit();
		if ($number % $this->numberUnit == 0) {
			return $this->hundred[($number / $this->numberUnit) - 1];
		} else {
			return $this->hundred[($number / $this->numberUnit) - 1] . $u->convert($number % $this->numberUnit);
		}
	}
	
}