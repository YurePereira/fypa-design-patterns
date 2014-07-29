<?php

class Thousand extends ConverterRomanNumerals {

	private $hundred;

	function __construct() {
		$this->numberUnit = 1000;
		$this->thousand = array(
			'M',
			'MM',
			'MMM',
			'<span style="text-decoration:overline;">IV</span>',
			'<span style="text-decoration:overline;">V</span>',
			'<span style="text-decoration:overline;">VI</span>',
			'<span style="text-decoration:overline;">VII</span>',
			'<span style="text-decoration:overline;">VIII</span>',
			'<span style="text-decoration:overline;">IX</span>'
		);
	}

	public function convert($number) {

		if ($number >= 1000 && $number < 1000000) {
			return $this->toRoman($number);
		} else {
			return 'Undefined conversion.';
		}

	}

	/**
	 * @todo Finalize implementation of this method.
	 */
	protected function toRoman($number) {
		$u = new Unit();
		if ($number % $this->numberUnit == 0 && $number < 10000) {
			return $this->thousand[($number / $this->numberUnit) - 1];
		} else if ($number < 10000) {
			return $this->thousand[($number / $this->numberUnit) - 1] . $u->convert($number % $this->numberUnit);
		} else {
			return 'Fail';
		}

	}
	
}