<?php

include('TipoUtilizador.php');

class Funcionario extends TipoUtilizador {
	
	private $id_utilizador;

	private $id_tipo;

	private $email;

	private $password;

	private $nome;

	private $sobrenome;
	
	private $contacto;

	public function __construct($id_utilizador, TipoUtilizador $id_tipo ,$email,$password,$nome,$sobrenome,$contacto){

		$this->id_utilizador = $id_utilizador;
		$this->id_tipo = $id_tipo;
		$this->email = $email;
		$this->password = $password;
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->contacto = $contacto;

	}

	public function getID_Utilizador(){

		return $this->id_utilizador;

	}
	
	public function getID_Tipo(){

		return $this->id_tipo;
	}

	public function getEmail(){

		return $this->email;

	}

	public function getPassword(){

		return $this->password;

	}

	public function getNome(){

		return $this->nome;

	}

	public function getSobrenome(){

		return $this->sobrenome;

	}

	public function getContacto(){

		return $this->contacto;

	}




	
	
}
