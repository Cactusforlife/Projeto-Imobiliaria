<!DOCTYPE html>
<html lang="pt">

  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Imobiliária Açores</title>
    
  </head>

  <body>

    <div id="top-bar">
      <a href="index.php"><img src="img/logo.png" alt=""><h1>AçorProp</h1></a>

      <div class="session-box">


        <button type="button" class="open-modal-login" name="login">login</button>

        <div class="modal-login">

          <form class="login" action="index.html" method="post">
            <h2>Login</h2>

            <span class="close-modal-login">x</span>

            <label for="loginEmail">e-mail</label>
            <input type="email" name="loginEmail">

            <label for="loginPassword">password</label>
            <input type="password" name="loginPassword">

            <input type="button" name="botaoLogin" value="login">
          </form>

        </div>


        <button type="button" class="open-modal-register" name="registo">registar</button>

        <div class="modal-register">

          <form class="register" action="index.html" method="post">
            <h2>Registo</h2>

            <span class="close-modal-register">x</span>

            <label for="registoEmail">e-mail</label>
            <input type="email" name="registoEmail">

            <label for="passwordRegisto">password</label>
            <input type="password" name="passwordRegisto">

            <label for="confirmarPassword">confirmar password</label>
            <input type="password" name="confirmarPassword">

            <label for="nome">nome</label>
            <input type="text" name="name">

            <label for="sobrenome">sobrenome</label>
            <input type="text" name="sobrenome">

            <label for="contacto">contato</label>
            <input type="text" name="contacto">

            <input type="button" name="botaoRegistar" value="registar">
          </form>

        </div>

      </div>

    </div>

    <div id="filters-box">

      <form class="filters-box" action="index.php" method="post">

        <h3>Procure imóveis</h3>

        <div class="filter archipelago">

          <div class="island">

            <select type="text" name="ilha">
              <option name="seleccioneIlha" selected disabled>
                Selecione a ilha
              </option>
            
              </select>

          </div>

          <div class="county">

            <select type="text" name="concelho">
              <option name="seleccioneConcelho" selected disabled>
                Selecione o concelho
              </option>
              <option name="saoMiguel">
                São Miguel
              </option>
              <option name="santaMaria">
                Santa Maria
              </option>
            </select>

          </div>

          <div class="parish">

            <select type="text" name="freguesia">
              <option name="seleccioneFreguesia" selected disabled>
                Selecione a freguesia
              </option>
              
              </select>

          </div>

        </div>

        <div class="filter goal">

          <select type="text" name="finalidade">

            <option name="seleccioneFinalidade" selected disabled>
              Selecione a sua finalidade
            </option>
          
          </select>

        </div>

        <div class="filter price">

          <label name="preco" for="preco">Preço</label>
          <input type="range" min="0" max="2000000" value="0">
          <label name="preco" for="preco">n_range</label>

        </div>

        <div class="filter immobile-type">

          <select type="text" name="tipoImovel">

            <option name="seleccioneTipoImovel" selected disabled>
              Selecione o tipo de imóvel
            </option>
           
          </select>

        </div>

        <div class="filter habitation">

          <div class="typology">

            <select type="text" name="tipologias">
              <option name="selecioneFinalidade" selected disabled>
                Selecione a tipologia
              </option>

            </select>

          </div>

          <div class="kitchen">

            <label name="cozinha" for="cozinha">Cozinha/s</label>
            <input type="range" name="cozinha" min="1" max="3" value="1">
            <label name="cozinha" for="cozinha">n_range</label>

          </div>

          <div class="wc">

            <label name="wc" for="wc">WC</label>
            <input type="range" name="wc" min="1" max="6" value="1">
            <label name="wc" for="wc">n_range</label>

          </div>

          <div class="garage">

            <label name="garagem" for="garagem">Garagem</label>
            <input type="checkbox" name="garagem">

          </div>

        </div>

        <input type="submit" name="pesquisar" value="filtrar">

      </form>

    </div>

    <div id="map"></div>

  </body>

  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/session.js"></script>

</html>
