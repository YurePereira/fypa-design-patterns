<?php

/**
* 
*/
class Item implements IComponentMenu {
	
	private $url;
	private $text;

	public function __construct( $url, $text ) {
		
		$this->url = $url;
		$this->text = $text;

	}

	public function render() {

		return '<li class="item"><a href="' . $this->url . '">' . $this->text . '</a></li>' . PHP_EOL;

	}
}