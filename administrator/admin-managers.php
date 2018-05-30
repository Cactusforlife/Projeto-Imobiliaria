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
      <a href="admin-immobiles.php"><img src="../img/logo-admin.png" alt=""></a>
      <div class="session-box-backend">
        <div class="session-on">
          <p>Bem-vindo, </p>
          <p><b>Júlio Medeiros</b></p>
        </div>
        <button class="photo-employee"></button>
        <ul>
          <li><a href="profile-settings.php">Definições de perfil</a></li>
          <li><a href="index.php">logout</a></li>
        </ul>
      </div>
    </div>
    <div class="nav-backend">
      <a href="admin-immobiles.php">Imóveis</a>
      <a href="admin-managers.php">Gestores</a>
      <a href="admin-statistics.php">Estatisticas</a>
    </div>
    <div class="container-admin">
      <button type="button" class="open-manager-register" name="abrirRegistoGestor">Criar gestor</button>
      <div class="manager-register">
        <form class="register-manager" action="index.html" method="post">

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
      <div class="managers">
<p>gestores criados</p>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../js/session-backend.js"></script>
</html>
