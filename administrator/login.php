<?php

  include('../classes/Funcionario.php');
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $db = new Database('../classes/config.ini');

    $email = $_POST['email'];

    $password = $_POST['password'];
		
		$sql = "SELECT * from funcionario WHERE email = '$email' AND password = '$password' ";			
		
    $result = $db->query($sql);

    if($result[0]["id_tipo"] == 1){

      
      $_SESSION['Administrator'] = $result[0]['id_tipo'];
      header('location:admin.php');
      
    }

    else{

      $_SESSION['Gestor'] = $result[0]['id_tipo'];
      header('location:manager.php');

    }
    

   var_dump($result).'<br>';
		
	}
  



?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Backend - login</title>

</head>
  <body>

    <form action="" method ="POST">

    <label for="Email"> Email:</label>

      <input name="email" type="text">

      <label for="Email"> Password:</label>

      <input name="password" type="password">

    <input type="submit" value="login" required>

    </form>

</body>

</html>
