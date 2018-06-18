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

        var_dump($results[0]["id_tipo"]);

        if($result[0]["id_tipo"] == 2){

        $_SESSION['Gestor'] = $result[0]['id_tipo'];
        header('location:manager-immobiles.php');

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


    }

?>