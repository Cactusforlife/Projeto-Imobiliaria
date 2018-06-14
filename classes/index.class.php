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

}

?>
