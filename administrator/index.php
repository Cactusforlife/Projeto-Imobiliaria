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
    <link rel="stylesheet" href="../css/style-back.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
  <body>
    <div class="backend-container">
      <div class="login-backend">
        <form class="" action="index.html" method="post">
          <label for="">email</label> <input type="email" name="email">
          <label for="">password</label> <input type="password" name="password">
          <input type="submit" name="" value="login">
        </form>
      </div>
    </div>
  </body>
</html>
