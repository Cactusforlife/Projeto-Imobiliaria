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
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body>
    <div id="top-bar">
      <img src="img/logo.png" alt="">
      <div id="session-box">
        <button type="button" id="open-modal-login" name="login">login</button>
        <div class="modal-login">
          <form class="" action="index.html" method="post">
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
      <select type="text" name="ilha">

        <option class="" name="saomiguel">
          São Miguel
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

      <select type="text" name="concelho">

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

      <select type="text" name="freguesia">

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

      <select type="text" name="finalidade">

        <option class="" name="compra">
          Comprar
        </option>
        <option class="" name="arrenda">
          Arrendar
        </option>

      </select>

      <select type="text" name="tipo_imovel">

        <option class="" name="compra">
          Moradia
        </option>
        <option class="" name="arrenda">
          Arrendar
        </option>

      </select>

      <select type="text" name="tipologias">

        <option class="" name="compra">
          T1
        </option>
        <option class="" name="arrenda">
          Arrendar
        </option>

      </select>
      <label for="">Nº Cozinhas</label> <input type="number" name="" value="">
      <label for="">Nº WC</label> <input type="number" name="" value="">
      <label for="">Garagem</label> <input type="checkbox" name="" value="">

      <p>
        <label for="amount">Preço</label>
        <input type="text" id="amount" readonly style="border:0;">
      </p>

      <div id="slider-range-min"></div>
    </form>
  </body>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/session_register.js"></script>
  <script type="text/javascript" src="js/features.js"></script>

</html>
