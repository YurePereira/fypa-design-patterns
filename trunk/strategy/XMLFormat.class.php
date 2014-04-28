<?php

/**
 * Description of ResponseFormat:
 * Converte para XML um Array de dados.
 * Design Pattern usando <b>Strategy</b>
 *
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 *
 * @since 2014-04-27
 * 
 *
 */
class XMLFormat implements ResponseFormat {

	const HEADER = '<?xml version="1.0" encoding="utf-8" ?>';
	private $xml;

    public function convert(Array $data) {

    	$this->xml = self::HEADER . PHP_EOL;
    	$this->xml .= '<response>' . PHP_EOL;
    	$this->xml .= $this->checkExistsSubArray( $data ) . PHP_EOL;
    	$this->xml .= '</response>';
    	return $this->xml;

    }

    /**
     * Método para percorrer recursivamento um array em seus sub itens até o último.
	 * 
	 * @since 2014-04-27
	 * @param mixed[] $array Array a se percorrido.
	 * @return String
	 * 
     */
    protected function checkExistsSubArray($array) {

    	$xml = '';
    	if ( is_array($array) ) {
			foreach ($array as $key => $value) {
				!is_numeric($key) || $key = 'column' . $key;  
				if ( is_array($value) ) {
					$xml .= "<$key>" . PHP_EOL;
					$xml .= $this->checkExistsSubArray( $value );
					$xml .= "</$key>" . PHP_EOL;		
				} else {
					$xml .= "<$key>$value</$key>". PHP_EOL;
				}
			}
		}
		return $xml;

    }

}