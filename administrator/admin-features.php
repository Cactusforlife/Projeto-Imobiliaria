<?php

  session_start();
<<<<<<< HEAD

  include('../classes/Administration.php');

  $bd = new Administration('../classes/config.ini');

  $session = $_SESSION['Administrator'];

  $sql = " SELECT * From funcionario where id_tipo = $session ";

  $results = $bd->query($sql);


  
?>


=======
  include ('../classes/funcionario.php');
  



?>

>>>>>>> 28ee60d8cf98e190182b61522971137b110506be
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
          <p><b><?php echo $results[0]["nome"]; ?></b></p>
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
      <button type="button" name="pedidosDestaque" class="btn-requests">Pedidos destaque(0)</button>
      <div class="requests-feature box slide-box">
        <div class="request-feature">
          <div class="thumbnail-request">
            thumbnail imovel
          </div>
          <div class="immobiles-request">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <div class="immobiles-properties">
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
            </div>
          </div>
          <div class="request-aprove">
            <div class="btns-aprove">
            <button type="button" name="button">autorizar</button>
            <button type="button" name="button">negar</button>
            </div>
            <a href="#">detalhes</a>
          </div>

        </div>
        <div class="request-feature">
          <div class="thumbnail-request">
            thumbnail imovel
          </div>
          <div class="immobiles-request">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <div class="immobiles-properties">
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
            </div>
          </div>
          <div class="request-aprove">
            <div class="btns-aprove">
            <button type="button" name="button">autorizar</button>
            <button type="button" name="button">negar</button>
            </div>
            <a href="#">detalhes</a>
          </div>

        </div>
        <div class="request-feature">
          <div class="thumbnail-request">
            thumbnail imovel
          </div>
          <div class="immobiles-request">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <div class="immobiles-properties">
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
            </div>
          </div>
          <div class="request-aprove">
            <div class="btns-aprove">
            <button type="button" name="button">autorizar</button>
            <button type="button" name="button">negar</button>
            </div>
            <a href="#">detalhes</a>
          </div>

        </div>
        <div class="request-feature">
          <div class="thumbnail-request">
            thumbnail imovel
          </div>
          <div class="immobiles-request">
            <div class="manager-request">
              <div class="photo-manager">

              </div>
              <a href="#">juliomedeiros@acorprop.com</a>
            </div>
            <div class="immobiles-properties">
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
            </div>
          </div>
          <div class="request-aprove">
            <div class="btns-aprove">
            <button type="button" name="button">autorizar</button>
            <button type="button" name="button">negar</button>
            </div>
            <a href="#">detalhes</a>
          </div>

        </div>

      </div>
      <h2 class="self_left">Imóveis Destacados</h2>
      <div class="featured-immobiles box">
        <div class="immobile-featured">
          <div class="thumbnail-feature">
            thumbnail imovel
          </div>
          <div class="properties-feature">
            <a href="#">juliomedeiros@acorprop.com</a>
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
              <a href="#">detalhes</a>
          </div>
        </div>
        <div class="immobile-featured">
          <div class="thumbnail-feature">
            thumbnail imovel
          </div>
          <div class="properties-feature">
            <a href="#">juliomedeiros@acorprop.com</a>
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
              <a href="#">detalhes</a>
          </div>
        </div>
        <div class="immobile-featured">
          <div class="thumbnail-feature">
            thumbnail imovel
          </div>
          <div class="properties-feature">
            <a href="#">juliomedeiros@acorprop.com</a>
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
              <a href="#">detalhes</a>
          </div>
        </div>
        <div class="immobile-featured">
          <div class="thumbnail-feature">
            thumbnail imovel
          </div>
          <div class="properties-feature">
            <a href="#">juliomedeiros@acorprop.com</a>
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
              <a href="#">detalhes</a>
          </div>
        </div>
        <div class="immobile-featured">
          <div class="thumbnail-feature">
            thumbnail imovel
          </div>
          <div class="properties-feature">
            <a href="#">juliomedeiros@acorprop.com</a>
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
              <a href="#">detalhes</a>
          </div>
        </div>
        <div class="immobile-featured">
          <div class="thumbnail-feature">
            thumbnail imovel
          </div>
          <div class="properties-feature">
            <a href="#">juliomedeiros@acorprop.com</a>
              <label for="">finalidade</label>
              <label for="">tipo imóvel</label>
              <label for="">ilha</label>
              <label for="">concelho</label>
              <label for="">freguesia</label>
              <label for="">area</label>
              <label for="">estado</label>
              <label for="">preço</label>
              <a href="#">detalhes</a>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../js/session-backend.js"></script>
  <script type="text/javascript" src="../js/backend.js"></script>
</html>
