<?php

class Unit extends ConverterRomanNumerals {

	private $unit;

	function __construct() {
		$this->unit = array(
			'Not exists in roman.',
			'I',
			'II',
			'III',
			'IV',
			'V',
			'VI',
			'VII',
			'VIII',
			'IX'
		);
	}

	public function convert($number) {

		if ($number >= 0 && $number < 10) {
			return $this->toRoman($number);
		} else {
			$this->setSuccessor(new Dozen());
			return $this->getSuccessor()->convert($number);
		}

	}

	protected function toRoman($number) {
		return $this->unit[$number];
	}
	
}