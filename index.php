<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Imobiliária Açores</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
  </head>
  <body>
    <div id="top-bar">
      <a href="index.php"><img src="img/logo.png" alt=""></a>
      <div id="session-box">
        <button type="button" id="open-modal-login" name="login">login</button>
        <div class="modal-login">
          <form class="" action="index.html" method="post">
            <h2>Login</h2>
            <span id="close-modal-login">x</span>
            <label for="">e-mail</label>
            <input type="text" name="email" value="">

            <label for="">password</label>
            <input type="text" name="password" value="">

            <input type="button" name="btn_login" value="login">
          </form>
        </div>
        <button type="button" id="open-modal-register" name="registo">registo</button>
        <div class="modal-register">
          <form class="" action="index.html" method="post">
            <h2>Registo</h2>

            <span id="close-modal-register">x</span>

            <label for="">e-mail</label>
            <input type="text" name="email" value="">

            <label for="">password</label>
            <input type="password" name="password" value="">

            <label for="">confirmar password</label>
            <input type="text" name="password_confirm" value="">

            <label for="">nome</label>
            <input type="text" name="email" value="">

            <label for="">sobrenome</label>
            <input type="text" name="email" value="">

            <label for="">contato</label>
            <input type="text" name="email" value="">

            <input type="button" name="btn_register" value="registar">
          </form>
        </div>
      </div>
    </div>

    <div id="map"></div>

    <form class="filter-box" action="index.php" method="post">
      <div class="arquipelago">
        <select type="text" name="ilha" class="filtros" id="ilha">
          <option class="" name="select-ilha" selected disabled>
            Selecione a ilha
          </option>
          <option class="" name="saomiguel">
            São Miguel
          </option>
          <option class="" name="santamaria">
            Santa Maria
          </option>
          <option class="" name="terceira">
            Terceira
          </option>
          <option class="" name="pico">
            Pico
          </option>
          <option class="" name="saojorge">
            São Jorge
          </option>
          <option class="" name="faial">
            Faial
          </option>
          <option class="" name="graciosa">
            Graciosa
          </option>
          <option class="" name="flores">
            Flores
          </option>
          <option class="" name="corvo">
            Corvo
          </option>

        </select>

        <select type="text" name="concelho" class="filtros" id="concelho">
          <option class="" name="select-concelho" selected disabled>
            Selecione o concelho
          </option>
          <option class="" name="saomiguel">
            Ponta Delgada
          </option>
          <option class="" name="saomiguel">
            Santa Maria
          </option>
          <option class="" name="saomiguel">
            Terceira
          </option>
          <option class="" name="saomiguel">
            Pico
          </option>
          <option class="" name="saomiguel">
            São Jorge
          </option>
          <option class="" name="saomiguel">
            Faial
          </option>
          <option class="" name="saomiguel">
            Graciosa
          </option>
          <option class="" name="saomiguel">
            Flores
          </option>
          <option class="" name="saomiguel">
            Corvo
          </option>

        </select>

        <select type="text" name="freguesia" class="filtros" id="freguesia">
          <option class="" name="select-freguesia" selected disabled>
            Selecione a freguesia
          </option>
          <option class="" name="saomiguel">
            São Roque
          </option>
          <option class="" name="saomiguel">
            Santa Maria
          </option>
          <option class="" name="saomiguel">
            Terceira
          </option>
          <option class="" name="saomiguel">
            Pico
          </option>
          <option class="" name="saomiguel">
            São Jorge
          </option>
          <option class="" name="saomiguel">
            Faial
          </option>
          <option class="" name="saomiguel">
            Graciosa
          </option>
          <option class="" name="saomiguel">
            Flores
          </option>
          <option class="" name="saomiguel">
            Corvo
          </option>

        </select>

      </div>
      <select type="text" name="finalidade" class="filtros">
        <option class="" name="select-finalidade" selected disabled>
          Selecione a sua finalidade
        </option>
        <option class="" name="compra">
          Comprar
        </option>
        <option class="" name="arrenda">
          Arrendar
        </option>

      </select>

      <select type="text" name="tipo_imovel" class="filtros">
        <option class="" name="select-tipo-imovel" selected disabled>
          Selecione o tipo de imóvel
        </option>
        <option class="" name="moradia">
          Moradia
        </option>
        <option class="" name="apartamento">
          Apartamento
        </option>
        <option class="" name="quinta">
          Quinta
        </option>
        <option class="" name="terreno">
          Terreno
        </option>
        <option class="" name="armazem">
          Armazem
        </option>

      </select>

      <div class="habitacao">
        <select type="text" name="tipologias" class="filtros">
          <option class="" name="select-finalidade" selected disabled>
            Selecione a tipologia
          </option>
          <option class="" name="t1">
            T1
          </option>
          <option class="" name="t2">
            T2
          </option>
        </select>

        <div class="filtros">
          <label id="cozinha" name="cozinha" for="cozinha">Cozinhas</label>
          <input type="range" min="1" max="3" value="1" class="slider" id="range_ktc">
          <label id="cozinha" name="cozinha" for="cozinha">n_range</label>
        </div>

        <div class="filtros">
          <label id="wc" name="wc" for="wc">Casas de banho</label>
          <input type="range" min="1" max="6" value="1" class="slider" id="range_wc">
        </div>

        <div class="filtros">
          <label for="">Garagem</label>
          <input type="checkbox" name="" value="">
        </div>
      </div>


      <div class="filtros">
        <label id="preco" name="preco" for="preco">Preço</label>
        <input type="range" min="0" max="2000000" value="0" class="slider" id="myRange">
      </div>

      <input type="submit" name="pesquisar" value="pesquisa">
    </form>
  </body>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/session.js"></script>
  <script type="text/javascript" src="js/search.js"></script>

</html>
