<?php
abstract class ConverterRomanNumerals {
	
	private $successor;
	protected $numberUnit;

	public abstract function convert($number);
	protected abstract function toRoman($number);

	public function setSuccessor($successor) {
		$this->successor = $successor;
	}

	public function getSuccessor() {
		return $this->successor;
	}

}