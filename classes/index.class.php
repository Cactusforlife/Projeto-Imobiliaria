<?php
require_once('database.class.php');

class index extends Database {

    public function Ilha(){
    
    $sql='select * from ilha';
    $ilha=$this->query($sql);
    foreach ($ilha as $value) {
      echo("<option value=".$value['id_lha'].">".utf8_decode($value['nome'])."</option>");
    }

  }

   public function Concelho($ilha){

    $sql='select * from concelho where idIlha = :idIlha';
    $ilha=  array('idIlha' => $idIlha);
    $concelho=$this->query($sql, $ilha);
    foreach ($concelho as $value) {
      echo("<option value=".$value['idConcelho']."   id='index'>".utf8_decode($value['concelho'])."</option>");
    }
    
  }


  public function finalidade(){
    echo(" <option value=''>Finalidade pretendida</option>");
    $sql='select * from finalidade';
    $finalidade=$this->query($sql);
    foreach ($finalidade as $value) {
      echo("<option value=".$value['idFinalidade']."   id='index'>".utf8_decode($value['finalidade'])."</option>");
    }

  }

  public function selectTipoImovel(){
    echo("<option value=''>Tipo de imóvel</option>");
    $sql='select * from tipo_imovel';
    $tipoImovel=$this->query($sql);
    foreach ($tipoImovel as $value) {
      echo("<option value=".$value['idTipoImovel']."   id='index'>".utf8_decode($value['tipoImovel'])."</option>");
    }

  }

  public function selectTipologia(){
    echo("<option value=''>Tipologia</option>");
    $sql='select * from tipologia';
    $tipologia=$this->query($sql);
    foreach ($tipologia as $value) {
      echo("<option value=".$value['idTipologia']."   id='index'>".utf8_decode($value['tipologia'])."</option>");
    }

  }



}

?>
