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
      <a href="manager-immobiles.php">Imóveis</a>
      <a href="manager-statistics.php">Estatisticas</a>
    </div>
    <div class="container-manager">
      <button type="button" class="open-immobile-register self_left" name="abrirRegistoImovel">Criar Imovel</button>
      <div class="immobile-register">
        <form class="register-immobile" action="index.html" method="post">

          <select class="immobile-finality" name="inserirFinalidade">
            <option name="seleccioneFinalidadeImovel" selected disabled>Selecione a finalidade</option>
          </select>

          <select class="immobile-immobile-type" name="inserirTipoImovel">
            <option name="seleccioneTipoImovelImovel" selected disabled>Selecione o tipo de imóvel</option>
          </select>

          <div class="immobile-habitation">

            <select class="immobile-typology" name="inserirTipologia">
              <option name="seleccioneTTiplogiaImovel" selected disabled>Selecione a tipologia</option>
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
              <option name="seleccioneIlhaImovel" selected disabled>Selecione a ilha</option>
            </select>

            <select class="immobile-county" name="inserirConcelho">
              <option name="seleccioneConcelhoImovel" selected disabled>Selecione o concelho</option>
            </select>

            <select class="immobile-parish" name="inserirFreguesia">
              <option name="seleccioneFreguesiaImovel" selected disabled>Selecione a freguesia</option>
            </select>

          </div>

          <label for="inserirEndereco">Endereço</label>
          <input type="text" name="inserirEndereco">

          <label for="inserirCodigoPostal">Código Postal</label>
          <input type="text" name="inserirCodigoPostal">

          <label for="inserirLatitude">Latitude</label>
          <input type="number" name="inserirLatitude">

          <label for="inserirLongitude">Longitude</label>
          <input type="number" name="inserirLongitude">

          <label for="inserirDescricao">Descrição</label>
          <input type="textarea" name="inserirDescricao">

          <label for="inserirArea">Area</label>
          <input type="number" name="inserirArea">

          <label for="inserirPreco">Preço</label>
          <input type="number" name="inserirPreco">

          <label for="inserirEstado">Estado</label>
          <input type="text" name="inserirEstado">

          <input type="radio" name="proposicao" value="destaque">Propor a destaque
          <input type="radio" name="proposicao" value="todos" checked>Não propor a destaque

          <input type="submit" name="adicionarImovel" value="Criar">
        </form>
      </div>
      <h2 class="self_left">Pedidos para visitas</h2>
      <div class="featured-immobiles">

      </div>
      <h2 class="self_left">Visitas marcadas</h2>
      <div class="featured-immobiles">

      </div>
      <div class="immobiles">
        <p>Imóveis criados</p>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../js/session-backend.js"></script>
</html>
