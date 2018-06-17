<?php

 session_start();

  include('../classes/Administration.php');

  $bd = new Administration('../classes/config.ini');

  $session = $_SESSION['Administrator'];

  $sql = " SELECT * From funcionario where id_tipo = $session ";

  $results = $bd->query($sql);

  var_dump($results);

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
          <p><b><?php echo $results[0]['nome'];?></b></p>
        </div>
        <button class="photo-employee"></button>
        <ul>
          <li><a href="profile-settings.php">Definições de perfil</a></li>
          <li name ="logout"><a href="index.php">Logout</a></li>
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

      <div class="tab-links">
        <button class="btns-tab active current" data-tab="active">Activo</button>
        <button class="btns-tab completed" data-tab="completed">Concluído</button>
      </div>

      <div class="immobiles-tabcontent box current" id="active">
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <label for="">descrição</label>
            <label for="">finalidade</label>
            <label for="">tipo imóvel</label>
            <label for="">ilha</label>
            <label for="">concelho</label>
            <label for="">freguesia</label>
            <label for="">endereço</label>
            <label for="">cod-postal</label>
            <label for="">area</label>
            <label for="">estado</label>
            <label for="">preço</label>
          </div>
          <div class="immobile-management">
            <button>concluir</button>
          </div>
        </div>
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <label for="">descrição</label>
            <label for="">finalidade</label>
            <label for="">tipo imóvel</label>
            <label for="">ilha</label>
            <label for="">concelho</label>
            <label for="">freguesia</label>
            <label for="">endereço</label>
            <label for="">cod-postal</label>
            <label for="">area</label>
            <label for="">estado</label>
            <label for="">preço</label>
          </div>
          <div class="immobile-management">
            <button>concluir</button>
          </div>
        </div>
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <label for="">descrição</label>
            <label for="">finalidade</label>
            <label for="">tipo imóvel</label>
            <label for="">ilha</label>
            <label for="">concelho</label>
            <label for="">freguesia</label>
            <label for="">endereço</label>
            <label for="">cod-postal</label>
            <label for="">area</label>
            <label for="">estado</label>
            <label for="">preço</label>
          </div>
          <div class="immobile-management">
            <button>concluir</button>
          </div>
        </div>
      </div>
      <div class="immobiles-tabcontent box" id="completed">
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <label for="">descrição</label>
            <label for="">finalidade</label>
            <label for="">tipo imóvel</label>
            <label for="">ilha</label>
            <label for="">concelho</label>
            <label for="">freguesia</label>
            <label for="">endereço</label>
            <label for="">cod-postal</label>
            <label for="">area</label>
            <label for="">estado</label>
            <label for="">preço</label>
          </div>
        </div>
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <label for="">descrição</label>
            <label for="">finalidade</label>
            <label for="">tipo imóvel</label>
            <label for="">ilha</label>
            <label for="">concelho</label>
            <label for="">freguesia</label>
            <label for="">endereço</label>
            <label for="">cod-postal</label>
            <label for="">area</label>
            <label for="">estado</label>
            <label for="">preço</label>
          </div>
        </div>
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <label for="">descrição</label>
            <label for="">finalidade</label>
            <label for="">tipo imóvel</label>
            <label for="">ilha</label>
            <label for="">concelho</label>
            <label for="">freguesia</label>
            <label for="">endereço</label>
            <label for="">cod-postal</label>
            <label for="">area</label>
            <label for="">estado</label>
            <label for="">preço</label>
          </div>
        </div>
      </div>

    </div>
  </body>
  <script type="text/javascript" src="../js/session-backend.js"></script>
  <script type="text/javascript" src="../js/backend.js"></script>
</html>
