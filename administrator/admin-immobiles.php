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
      <a href="admin-features.php">Destaques</a>
      <a href="admin-immobiles.php">Imóveis</a>
      <a href="admin-managers.php">Gestores</a>
      <a href="admin-statistics.php">Estatisticas</a>
    </div>
    <div class="container-admin">

      <div class="tab-links">
        <button class="btns-tab current" data-tab="active">Activo</button>
        <button class="btns-tab" data-tab="completed">Concluído</button>
      </div>

      <div class="immobiles-tabcontent current" id="active">
1
      </div>
      <div class="immobiles-tabcontent" id="completed">
2
      </div>

    </div>
  </body>
  <script type="text/javascript" src="../js/session-backend.js"></script>
  <script type="text/javascript" src="../js/backend.js"></script>
</html>
