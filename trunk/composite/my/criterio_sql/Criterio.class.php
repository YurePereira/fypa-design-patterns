<?php
/**
 * 
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 * @since 2014-04-21 
 * 
 */

class Criterio implements ICompomentsCriterio {

	private $filters[];
	private $operators[];

	const AND_OPERATOR = 'AND';
	const OR_OPERATOR = 'OR';

	public function __construct(Filter $f, $operator) {


	}

	public function dump() {


	}

	public function addFilter() {


	}

	public function addRemove() {


	}
}