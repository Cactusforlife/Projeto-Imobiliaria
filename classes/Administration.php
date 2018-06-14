<?php

include('database.php');

    class Administration extends Database{

        public function Login($email,$password){
		
		$sql = "SELECT * from funcionario WHERE email = '$email' AND password = '$password' ";			
		
        $result = $this->query($sql);

        if($result[0]["id_tipo"] == 1){

        
        $_SESSION['Administrator'] = $result[0]['id_tipo'];
        header('location:admin.php');
        
        }

        else{

        $_SESSION['Gestor'] = $result[0]['id_tipo'];
        header('location:manager.php');

        }
        
    }

    public function Logout(){

        session_destroy();


    }

    }

?>