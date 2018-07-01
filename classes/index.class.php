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
   public function Concelho(){

    $sql='select * from concelho';
    $concelho=$this->query($sql);
    foreach ($concelho as $value) {
      echo("<option value=".$value['id_concelho']." id='concelho' >".utf8_encode($value['nome'])."</option>");
    }
    
  }

    public function Freguesia(){

    $sql='select * from freguesia';
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

  public function Login($email,$password){
		
		$sql = " SELECT * from cliente WHERE email = '$email' AND password = '$password' ";			
		
        $result = $this->query($sql);
        
        $_SESSION['Cliente'] = $result[0]['id_cliente'];
    
        $nome = $result[0]['nome'];
        
        }

      



}

?>
