<?php

 session_start();

  include('../classes/Administration.php');
  include('../classes/Funcionario.php');

  $bd = new Administration('../classes/config.ini');

  $session = $_SESSION['Administrator'];

  $sql = " SELECT * From funcionario where id_tipo = $session ";

  $results = $bd->query($sql);


  if($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $sql = " INSERT INTO funcionario (id_tipo, email, password, nome, sobrenome, contacto) VALUES (:id_tipo, :email, :password, :nome, :sobrenome, :contacto)";

  $params = array('id_tipo'=> 2, 'email' => $_POST['emailGestor'], 'password' => $_POST['passwordGestor'], 'nome' => $_POST['nomeGestor'], 'sobrenome' => $_POST["sobrenomeGestor"], 'contacto' => $_POST["contactoGestor"]);

  $bd->query($sql, $params);

  function Logout(){

        session_destroy();

    }
  
  
  }

?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administração</title>
    <link rel="stylesheet" href="../css/style-back.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="top-bar">
      <a href="admin-features.php"><img src="../img/logo-admin.png" alt=""></a>
      <div class="session-box-backend">
        <div class="session-on">
          <p>Bem-vindo, </p>
          <p><b><?php echo $results[0]['nome']; ?></b></p>
        </div>
        <button class="photo-employee"></button>
        <ul>
          <li><a href="profile-settings.php">Definições de perfil</a></li>
          <li onclick ="Logout(); "><a href="index.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="nav-backend">
      <a href="admin-features.php">Destaques</a>
      <a href="admin-immobiles.php">Imóveis</a>
      <a href="admin-managers.php">Gestores</a>
      <a href="admin-statistics.php">Estatisticas</a>
    </div>
    <div class="container-backend">
      <button type="button" class="btn-requests" name="abrirRegistoGestor">Criar gestor</button>
      <div class="manager-register box slide-box">
        <form class="register-manager" action="" method="post">

          <label for="emailGestor">Email</label>
          <input type="email" name="emailGestor">

          <label for="passwordGestor">Password</label>
          <input type="password" name="passwordGestor">

          <label for="confirmarPasswordGestor">Confirmar password</label>
          <input type="password" name="confirmarPasswordGestor">

          <label for="nomeGestor">Nome</label>
          <input type="text" name="nomeGestor">

          <label for="sobrenomeGestor">Sobrenome</label>
          <input type="text" name="sobrenomeGestor">

          <label for="contatoGestor">Contato</label>
          <input type="text" name="contactoGestor">

          <input type="submit" name="adicionarGestor" value="Criar">
        </form>
      </div>
      <h2 class="self_left">Gestores</h2>
      <div class="managers box">
      
       <?php $bd->getAllGestores(); ?>
        
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../js/session-backend.js"></script>
  <script type="text/javascript" src="../js/backend.js"></script>
</html>
