<?php
/**
 * TODO Auto-generated comment.
 */
class Imovel {
	/**
	 * TODO Auto-generated comment.
	 */
	private $id_imovel;
	/**
	 * TODO Auto-generated comment.
	 */
	private $id_finalidade;
	/**
	 * TODO Auto-generated comment.
	 */
	private $id_tipo_imovel;
	/**
	 * TODO Auto-generated comment.
	 */
	private $id_freguesia;
	/**
	 * TODO Auto-generated comment.
	 */
	private $descricao;
	/**
	 * TODO Auto-generated comment.
	 */
	private $preco;
	/**
	 * TODO Auto-generated comment.
	 */
	private $area;
	/**
	 * TODO Auto-generated comment.
	 */
	private $latitude;
	/**
	 * TODO Auto-generated comment.
	 */
	private $longitude;
	/**
	 * TODO Auto-generated comment.
	 */
	private $endereco;
	/**
	 * TODO Auto-generated comment.
	 */
	private $cod_postal;
	/**
	 * TODO Auto-generated comment.
	 */
	private $situacao;
	/**
	 * TODO Auto-generated comment.
	 */
	private $id_gestor;
	/**
	 * TODO Auto-generated comment.
	 */
	private $estado;

	public function __construct($id_finalidade,$id_tipo_imovel,$id_freguesia,$descricao,$preco,$area,$latitude,$longitude,$endereco,$cod_postal,$situacao,$id_gestor,$estado){

		$this->id_imovel = $id_imovel;
		$this->id_finalidade = $id_finalidade;
		$this->id_tipo_imovel = $id_tipo_imovel;
		$this->id_freguesia = $id_freguesia;
		$this->descricao = $descricao;
		$this->preco = $preco;
		$this->area = $area;
		$this->latitude = $latitude;
		$this->longitude = $longitude;
		$this->endereco = $endereco;
		$this->cod_postal = $cod_postal;
		$this->situacao = $situacao;
		$this->id_gestor = $id_gestor;
		$this->estado = $estado;

	}

	public function getID_Imovel(){

		return $this->id_imovel;

	}
	
	public function getID_finalidade(){

		return $this->id_finalidade;
	}

	public function getID_tipo_imovel(){

		return $this->id_tipo_imovel;

	}

	public function getFreguesia(){

		return $this->id_freguesia;

	}

	public function getDescricao(){

		return $this->descricao;

	}

	public function getPreco(){

		return $this->preco;

	}

	public function getArea(){

		return $this->area;

	}

	public function getLatitude(){

		return $this->latitude;
	}

	public function getLongitude(){

		return $this->longitude;
	}

	public function getEndereco(){

		return $this->endereco;
	}

	public function getCodPostal(){

		return $this->cod_postal;
	}

	public function getSituacao(){

		return $this->situacao;
	}

	public function getID_Gestor(){

		return $this->id_gestor;
	}

	public function estado(){

		return $this->estado;
	}


}
