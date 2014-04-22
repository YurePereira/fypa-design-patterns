<?php
/**
 * 
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 * @since 2014-04-21 
 * 
 */
class Filter implements IComponentCriterio {

	private $field;
	private $operator;
	private $value;

	public function __construct( $field, $operator, $value ) {

		$this->field = $field;
		$this->operator = $operator;
		$this->value = $value;

	}

	private function transformByType( $value ) {
		
		$str = '';
		if ( $this->is_field( $value ) ) {
			$str = utf8_decode( $value );				
		} else if ( is_bool( $value ) ) {
			$str = $value ? 'TRUE' : 'FALSE';
		} else if ( is_int( $value ) ) {
			$str = $value;
		} else if ( is_string( $value ) ) {
			$str = '"' . $value . '"';
		}
		return $str;

	}	

	private function transform( $value ) {

		$str = '';
		if ( is_array( $this->value ) ) {
			$str2 = array();
			foreach ($this->value as $v) {
				$str2[] = $this->transformByType( $v );
			}
			$str .= '(';
			$str .= implode(',', $str2);
			$str .= ')';
		} else {
			$str = $this->transformByType( $this->value );
		}
		return $str; 

	}

	private function is_field( $value ) {

		$pattern = '/^´([a-zA-Z0-9_-])+´$/';
		return preg_match($pattern, $value);

	}

	public function dump() {

		$str = $this->field . ' ' . $this->operator . ' ';
		$str .= $this->transform( $this->value );
		return $str;

	}

} 