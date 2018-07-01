<?php

 session_start();

  include('../classes/Administration.php');
  include('../classes/Funcionario.php');
  include('../classes/imovel.php');

  $bd = new Administration('../classes/config.ini');

  $session = $_SESSION['Gestor'];

  $sql = " SELECT * From funcionario where id_tipo = $session ";

  $results = $bd->query($sql);

  var_dump($results);

  
   function Logout(){

        session_destroy();

    }

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = " INSERT INTO utilizador (id_finalidade, id_tipo_imovel, id_freguesia, descricao, preco, area, latitude, longitude, endereco, cod_postal, situacao, id_gestor, estado ) 
    VALUES (:id_finalidade, :id_tipo_imovel, :id_freguesia, :descricao, :preco, :area, :latitude, :longitude, :endereco, :cod_postal, :situacao, :id_gestor, :estado)";

    $params = array('id_finalidade' => $_POST['finalidade'], 'id_tipo_imovel' => $_POST['inserirTipoImovel'], 'id_freguesia' => $_POST['freguesia'], 'descricao' => $_POST['descricao'], 
              'preco' => $_POST['preco'], 'area' => $_POST['area'], 'latitude' => $_POST['latitude'], 'longitude' => $_POST['longitude'], 'endereco' => $_POST['endereco'],
               'cod_postal' => $_POST['cod_postal'], 'situacao' => $_POST['situacao'], 'id_gestor'=> $results[0]['id_utilizador'], 'estado' => $_POST['destaque']);


  }

?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestão</title>
    <link rel="stylesheet" href="../css/style-back.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="top-bar">
      <a href="manager-immobiles.php"><img src="../img/logo-manager.png" alt=""></a>
      <div class="session-box-backend">
        <div class="session-on">
          <p>Bem-vindo, </p>
          <p><b><?php echo $results[0]['nome'];?></b></p>
        </div>
        <button class="photo-employee"></button>
        <ul>
          <li><a href="profile-settings.php">Definições de perfil</a></li>
          <li onclick ="Logout(); "><a href="index.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="nav-backend">
      <a href="manager-immobiles.php">Imóveis</a>
      <a href="manager-visits.php">Visitas</a>
      <a href="manager-statistics.php">Estatisticas</a>
    </div>
    <div class="container-backend">
      <button type="button" class="btn-requests" name="abrirRegistoImovel">Criar Imovel</button>
      <div class="immobile-register box slide-box">
        <form class="register-immobile" action="" method="post">

          <select class="immobile-finality" name="inserirFinalidade">
            <?php $bd->getFinalidade(); ?>
          </select>

          <select class="immobile-type" name="inserirTipoImovel">
             <?php $bd->getTipoImovel(); ?>
          </select>

          <div class="immobile-habitation">

            <select class="immobile-typology" name="inserirTipologia">
               <?php $bd->getTipologia(); ?>
            </select>

            <label for="inserirWC">WC</label>
            <input type="number" name="inserirWC">

            <label for="inserirCozinha">Cozinha/s</label>
            <input type="number" name="inserirCozinha">

            <label for="inserirGaragem">Garagem</label>
            <input type="checkbox" name="inserirGaragem">

            <label for="inserirAreaBruta">Área bruta</label>
            <input type="number" name="inserirAreaBruta">
          </div>

          <div class="immobile-archipelago">

            <select class="immobile-island" name="inserirIlha">
              <?php $bd->Ilha(); ?>
            </select>              
            </select>

            <select class="immobile-county" name="inserirConcelho">
              <?php $bd->Concelho(); ?>
            </select>

            
                 <?php $bd->Freguesia(); ?>
            </select>

          </div>

          <label for="inserirEndereco">Endereço</label>
          <input type="text" name="endereco">

          <label for="inserirCodigoPostal">Código Postal</label>
          <input type="text" name="cod_postal">

          <label for="inserirDescricao">Descrição</label>
          <input type="textarea" name="descricao">

          <label for="inserirArea">Area</label>
          <input type="number" name="area">

          <label for="inserirPreco">Preço</label>
          <input type="number" name="preco">

          <label for="estado">Estado</label>
          <select class="estado" name="situacao">
          <option value="Novo">Novo</option>
          <option value="usado">Usado</option>
          </select>

          <label for="destaque">Propor a destaque</label>
          <input type="checkbox" name="destaque" value="destaque">

          <input type="submit" name="adicionarImovel" value="Criar">
        </form>
      </div>
      <h2 class="self_left">Imóveis</h2>
      <div class="immobiles box">
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
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
            <label for="">situação</label>
          </div>
          <div class="immobile-management">
            <button>editar</button>
            <button>eliminar</button>
          </div>
        </div>
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
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
            <label for="">situação</label>
          </div>
          <div class="immobile-management">
            <button>editar</button>
            <button>eliminar</button>
          </div>
        </div>
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
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
            <label for="">situação</label>
          </div>
          <div class="immobile-management">
            <button>editar</button>
            <button>eliminar</button>
          </div>
        </div>
        <div class="immobile">
          <div class="thumbnail">

          </div>
          <div class="immobile-info">
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
            <label for="">situação</label>
          </div>
          <div class="immobile-management">
            <button>editar</button>
            <button>eliminar</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../js/session-backend.js"></script>
  <script type="text/javascript" src="../js/backend.js"></script>
</html>
