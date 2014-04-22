<?php
/**
 * 
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 * @since 2014-04-21 
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