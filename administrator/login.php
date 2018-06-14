<?php

  include('../classes/Administration.php');
  session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $bd = new Administration('../classes/config.ini');

    $bd->Login($_POST['email'],$_POST['password']);
		
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
