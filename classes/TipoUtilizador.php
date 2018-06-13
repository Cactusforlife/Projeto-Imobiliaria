<?php

include('database.php');

class TipoUtilizador extends Database {

	private $id_tipo;

	private $tipo;

	public function __construct($id_tipo,$tipo){

		$this->id_tipo = $id_tipo;
		$this->tipo = $tipo;

	}

	public function getID_Tipo(){

		return $this->id_tipo;
	}

	public function getTipo(){

		return $this->tipo;
	}
}
