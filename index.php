<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Imobiliária Açores</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
    <div id="top-bar">
      <img src="img/logo.png" alt="">
      <form class="search-box" action="index.php" method="post">
        <input type="text" name="" value="" placeholder="procure propriedades">
      </form>
      <div id="session-box">
        <button type="button" id="btn-login" name="login">login</button>
        <button type="button" id="btn-registo" name="registo">registo</button>
      </div>
    </div>

    <div id="map"></div>
    
    <form class="filter-box" action="index.php" method="post">
      <input type="text" name="" value="" placeholder="imóveis em destaque">
      <input type="text" name="" value="" placeholder="finalidade">
      <input type="text" name="" value="" placeholder="tipo de imóvel">
      <input type="text" name="" value="" placeholder="ilha">
      <input type="text" name="" value="" placeholder="conselho">
      <input type="text" name="" value="" placeholder="freguesia">
      <input type="text" name="" value="" placeholder="Valor do imóvel">
      <input type="text" name="" value="" placeholder="tipologia">
      <input type="checkbox" name="" value="" placeholder="">
    </form>
  </body>
</html>
