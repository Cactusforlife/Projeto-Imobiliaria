<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestão</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_back.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="top-bar">
      <a href="manager.php"><img src="../img/logo.png" alt=""></a>
      <div class="session-box-backend">
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
    <div class="nav_backend">
      <button type="button" name="imoveis">Imóveis</button>
      <button type="button" name="visitas">Visitas</button>
      <button type="button" name="visitas">Estatisticas</button>
    </div>
  </body>
  <script type="text/javascript" src="../js/session.js"></script>
</html>
