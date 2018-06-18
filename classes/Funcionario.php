<?php

<<<<<<< HEAD


class Funcionario {
=======
include('database.php');

class Funcionario extends Database {
>>>>>>> 28ee60d8cf98e190182b61522971137b110506be
	
	private $id_utilizador;

	private $id_tipo;

	private $email;

	private $password;

	private $nome;

	private $sobrenome;
	
	private $contacto;

<<<<<<< HEAD
	public function __construct($id_tipo,$email,$password,$nome,$sobrenome,$contacto){
=======
	public function __construct($id_utilizador, $id_tipo ,$email,$password,$nome,$sobrenome,$contacto){
>>>>>>> 28ee60d8cf98e190182b61522971137b110506be

		$this->id_utilizador = $id_utilizador;
		$this->id_tipo = $id_tipo;
		$this->email = $email;
		$this->password = $password;
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->contacto = $contacto;

		$db = parent::_construct('../classes/config.ini');

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

<<<<<<< HEAD
	
=======
	public function getSession(){

		

	}



>>>>>>> 28ee60d8cf98e190182b61522971137b110506be

	
	
}
