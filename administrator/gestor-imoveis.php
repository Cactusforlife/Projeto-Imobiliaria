<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestão</title>
    <link rel="stylesheet" href="../css/style_back.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="top-bar">
      <a href="gestor-imoveis.php"><img src="../img/logo-gestor.png" alt=""></a>
      <div class="session-box-backend">
        <div class="session-on">
          <p>Bem-vindo, </p>
          <p><b>Júlio Medeiros</b></p>
          <a href="index.php">logout</a>
        </div>
        <button class="photo-employee">

        </button>
      </div>
    </div>
    <div class="nav-backend">
      <a href="gestor-imoveis.php">Imóveis</a>
      <a href="gestor-estatisticas.php">Estatisticas</a>
    </div>
    <div class="container-manager">
      <button type="button" class="open-property-register" name="abrirRegistoImovel">Criar Imovel</button>
      <div class="property-register">
        <form class="register-property" action="index.html" method="post">

          <select class="property-finality" name="inserirFinalidade">
            <option name="seleccioneFinalidadeImovel" selected disabled>Selecione a finalidade</option>
          </select>

          <select class="property-immobile-type" name="inserirTipoImovel">
            <option name="seleccioneTipoImovelImovel" selected disabled>Selecione o tipo de imóvel</option>
          </select>

          <div class="property-habitation">

            <select class="property-typology" name="inserirTipologia">
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

          <div class="property-archipelago">

            <select class="property-island" name="inserirIlha">
              <option name="seleccioneIlhaImovel" selected disabled>Selecione a ilha</option>
            </select>

            <select class="property-county" name="inserirConcelho">
              <option name="seleccioneConcelhoImovel" selected disabled>Selecione o concelho</option>
            </select>

            <select class="property-parish" name="inserirFreguesia">
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

          <input type="submit" name="adicionarImovel" value="Criar">
        </form>
      </div>
      <div class="properties">
        <p>Imóveis criados</p>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../js/session.js"></script>
</html>
