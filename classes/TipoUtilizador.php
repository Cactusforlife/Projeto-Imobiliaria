<?php
/**
 * TODO Auto-generated comment.
 */
class TipoUtilizador extends Database {
	/**
	 * TODO Auto-generated comment.
	 */
	private $id_tipo;
	/**
	 * TODO Auto-generated comment.
	 */
	private $tipo;

	public function __construct($id_tipo,$tipo){

		$this->id_tipo = $id_tipo;
		$this->tipo = $tipo;

	}

	public function getId_tipo(){

		return $this->id_tipo;
	}

	public function getTipo(){

		return $this->tipo;
	}
}
