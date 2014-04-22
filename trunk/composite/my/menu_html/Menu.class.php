<?php
/**
 * 
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 * @since 2014-04-21 
 * 
 */
class Menu implements IComponentMenu {

	private $children;
	
	public function __construct() {

		$this->children = array();

	}

	public function render() {

		$str = '<ul class="menu">' . PHP_EOL;

		foreach ( $this->children as $child ) {
			
			$str .= $child->render();

		}

		$str .= '</ul>' . PHP_EOL;

		return $str;
	}

	public function addChild( IComponentMenu $icm ) {

		$this->children[] = $icm;

	}

	public function removeChild( IComponentMenu $icm ) {

	}

}