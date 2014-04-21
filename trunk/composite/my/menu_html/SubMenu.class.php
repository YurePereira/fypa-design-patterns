<?php

class SubMenu implements IComponentMenu {
	
	public function __construct() {

	}

	public function render() {

		$str = '<li class="sub-menu">' . PHP_EOL;
		$str .= '<ul class="menu">' . PHP_EOL;

		foreach ( $this->children as $child ) {
			
			$str .= $child->render();

		}

		$str .= '</ul>' . PHP_EOL;
		$str .= '</li>' . PHP_EOL;

		return $str;
	}

	public function addChild( IComponentMenu $icm ) {

		$this->children[] = $icm;

	}

	public function removeChild( IComponentMenu $icm ) {

	}

}