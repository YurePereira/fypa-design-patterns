<?php

/**
 * Description of ResponseFormat:
 * Interface para definição de métodos comum na criação de uma classe de retorno de responstas do <b>HTTP</b> 1.1 do <b>Web Service Rest</b>.
 * Design Pattern usando <b>Strategy</b>
 *
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 *
 * @since 2014-04-27
 * 
 *
 */
interface ResponseFormat {

    public function convert(Array $data);

}