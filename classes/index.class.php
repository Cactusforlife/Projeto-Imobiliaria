<?php
require('database.php');

class index extends Database {

    public function Ilha(){
    
    $sql='select * from ilha';
    $ilha=$this->query($sql);
    foreach ($ilha as $value) {
      echo("<option value=".$value['id_ilha']." id='ilha' >".utf8_encode($value['nome'])."</option>");
    }

  }

<<<<<<< HEAD
   public function Concelho($ilha){

    $sql='select * from concelho where id_ilha = :id_ilha';
    $ilha=  array('id_ilha' => $ilha);
    $concelho=$this->query($sql,$ilha);
    foreach ($concelho as $value) {
      echo("<option value=".$value['id_concelho']." id='concelho' >".utf8_encode($value['nome'])."</option>");
    }
    
  }

    public function Freguesia($concelho){

    $sql='select * from freguesia where id_concelho = :id_concelho';
    $concelho=  array('id_concelho' => $concelho);
    $freguesia=$this->query($sql);
    foreach ($freguesia as $value) {
      echo("<option value=".$value['id_freguesia']." id='freguesia'>".utf8_encode($value['nome'])."</option>");
    }
    
  }


  public function finalidade(){

    $sql='select * from finalidade';
    $finalidade=$this->query($sql);
    foreach ($finalidade as $value) {
      echo("<option value=".$value['id_finalidade'].">".utf8_encode($value['finalidade'])."</option>");
    }

  }

  public function TipoImovel(){

    $sql='select * from tipo_imovel';
    $tipoImovel=$this->query($sql);
    foreach ($tipoImovel as $value) {
      echo("<option value=".$value['id_tipo_imovel']." >".utf8_encode($value['tipo_imovel'])."</option>");
    }

  }

  public function Tipologia(){
    
    $sql='select * from tipologia';
    $tipologia=$this->query($sql);
    foreach ($tipologia as $value) {
      echo("<option value=".$value['id_tipologia']." >".utf8_encode($value['tipologia'])."</option>");
    }

  }



=======
>>>>>>> b2ef2cf209f088f01915cc003dd74a88fb2214ed
}

?>
