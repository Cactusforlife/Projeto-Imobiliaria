<?php

include('database.php');

    class Administration extends Database{

        public function Login($email,$password){
		
		$sql = " SELECT * from funcionario WHERE email = '$email' AND password = '$password' ";			
		
        $result = $this->query($sql);

        if($result[0]["id_tipo"] == 1){

        
        $_SESSION['Administrator'] = $result[0]['id_tipo'];
        
        header('location:admin-features.php');

        return $_SESSION['Administrator'];

        
        }

        

        if($result[0]["id_tipo"] == 2){ 

        $_SESSION['Gestor'] = $result[0]['id_tipo'];
        header('location:manager-immobiles.php');

        return $_SESSION['Gestor'];
            
        

        }
        
    }


    public function getNome($session){


        $sql = " SELECT * From funcionario where id_tipo = $session ";

        $results = $this->query($sql);

        return $results[0]['nome'];


    }
    

    public function getAllGestores(){


		$sql = " SELECT * From funcionario where id_tipo = 2 ";

        $results=$this->query($sql);
        
        foreach ($results as $value){

          echo ("<div class='manager'>");
          echo ("<div class='photo-manager'>");
          echo ("</div>");
          echo("<label for=''>".utf8_encode($value['nome'])."</label>");
          echo("<a href='#'>".utf8_encode($value['email'])."</a>");
          echo("</div>");

        }


    }

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

      echo("<option name = 'freguesia' value=".$value['id_freguesia']." id='freguesia'>".utf8_encode($value['nome'])."</option>");
   
    }


  }
    
    public function getFinalidade(){

        $sql = "SELECT * FROM finalidade";

        $results = $this->query($sql);

        foreach($results as $value){

            echo("<option name='finalidade' value=".$value['id_finalidade'].">".utf8_encode($value['finalidade'])."</option>");
        }
    
    }

    public function getTipoImovel(){

        $sql = "SELECT * FROM tipo_imovel";

        $results = $this->query($sql);

        foreach($results as $value){

            echo("<option name = 'tipo_imovel' value=".$value['id_tipo_imovel'].">".utf8_encode($value['tipo_imovel'])."</option>");
        }
    
    }

    
    public function getTipologia(){

        $sql = "SELECT * FROM tipologia";

        $results = $this->query($sql);

        foreach($results as $value){

            echo("<option name = 'tipologia value=".$value['id_tipologia'].">".utf8_encode($value['tipologia'])."</option>");
        }
    
    }



    }

?>