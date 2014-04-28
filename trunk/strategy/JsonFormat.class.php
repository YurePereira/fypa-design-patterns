<?php

/**
 * Description of FormatJson:
 * Converte para Json um Array de dados.
 * Design Pattern usando <b>Strategy</b>
 *
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 *
 * @since 2014-04-27
 * 
 *
 */
class JsonFormat implements ResponseFormat {

    public function convert(Array $data) {

    	return json_encode( $data );

    }

}