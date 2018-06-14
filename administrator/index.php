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
<<<<<<< HEAD
    <link rel="stylesheet" href="../css/style-back.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
  <body>
    <div class="backend-container">
      <div class="login-backend">
        <form class="" action="index.html" method="post">
          <label for="">email</label> <input type="email" name="">
          <label for="">password</label> <input type="password" name="">
          <input type="button" name="" value="login">
        </form>
      </div>
    </div>
  </body>
=======

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

>>>>>>> dev-miguel
</html>
