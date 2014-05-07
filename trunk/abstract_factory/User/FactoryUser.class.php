<?php
/**
 * 
 *
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 * @since 2014-05-06
 * 
 */
class FactoryUser extends AbstractFactoryUser {

	public function createUser($type = null) {

		switch ($type) {
			case 'aluno':
				return new AlunoUser();
				break;
			case 'professor':
				return new ProfessorUser();
				break;
			case 'coordenador':
				return new CoordenadorUser();
				break;
			case 'diretor':
				return new DiretorUser();
				break;
			case 'secretaria':
				return new SecretariaUser();
				break;
			default:
				return new DefaultUser();
				break;
		}

	}

}