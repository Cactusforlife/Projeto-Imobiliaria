<?php

    include('Funcionario.php');
    
  class Administrator extends Funcionario {
	

	public function login($email,$password){

		
		$db = new Database ('../classes/config.ini');
		
		$sql = "SELECT * from funcionario WHERE email = '$email' AND password = '$password' ";			
		
		$result = $db->query($sql);
		
	}
}
