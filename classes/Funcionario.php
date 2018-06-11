<?php
/**
 * TODO Auto-generated comment.
 */
class Funcionario extends TipoUtilizador {
	/**
	 * TODO Auto-generated comment.
	 */
	private $id_utilizador;
	/**
	 * TODO Auto-generated comment.
	 */
	private $id_tipo;
	/**
	 * TODO Auto-generated comment.
	 */
	private $email;
	/**
	 * TODO Auto-generated comment.
	 */
	private $password;
	/**
	 * TODO Auto-generated comment.
	 */
	private $nome;
	/**
	 * TODO Auto-generated comment.
	 */
	private $sobrenome;
	/**
	 * TODO Auto-generated comment.
	 */
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

	public function
}
