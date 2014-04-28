<?php

/**
 * Description of Response:
 * Classe para formatar uma resposta do <b>Web Service Rest</b> 
 * nos formatos XML ou Json
 * 
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 *
 * @since 2014-04-27
 * 
 *
 */
class ResponseView {

	private $format;
	
	public function __construct(ResponseFormat $rf = null) {

		if ( is_null( $rf )) {
			$this->setFormat(new JsonFormat());
		} else {
			$this->setFormat($rf);
		}

	}

	public function format(Array $data) {

		return $this->format->convert($data);

	}

	public function setFormat(ResponseFormat $rf) {

		$this->format = $rf;

	}

}