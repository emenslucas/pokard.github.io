<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pokard</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.svg" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://api.fontshare.com/v2/css?f[]=clash-display@200,400,700,500,600,300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav class="p-0 navbar navbar-expand-lg fixed-top">
        <div class="container-fluid p-0">
          <div class="navbar-subContainer">
            <a class="navbar-brand" href="#">
              <span>Pokard</span
              ><img src="img/favicon.svg" alt="Icono de Pokard"
            /></a>
            <button
              class="navbar-toggler custom-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <div class="hamburger-icon">
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </button>
          </div>

          <div
            class="collapse navbar-collapse d-lg-flex justify-content-center"
            id="navbarNavDropdown"
          >
            <ul class="navbar-nav d-flex gap-2 p-lg-0 p-4">
              <li class="nav-item ps-lg-0 ps-2">
                <a class="nav-link" aria-current="page" href="#inicio"
                  >Inicio</a
                >
              </li>
              <li class="nav-item ps-lg-0 ps-2">
                <a class="nav-link" href="#cartas">Cartas</a>
              </li>
              <li class="nav-item ps-lg-0 ps-2">
                <a class="nav-link" href="#contacto">Contacto</a>
              </li>
              <li class="nav-item ps-lg-0 ps-2">
                <a class="nav-link" href="#carrito">Carrito</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section id="inicio">
      <div class="container p-5">
        <div class="titleContainer">
          <h1>
            <span id="highlight1">Bienvenido a Pokard</span>: donde los
            entrenadores se convierten en
            <span id="highlight2">coleccionistas</span>.
          </h1>
          <div class="separator"></div>
        </div>

        <?php
        require_once "php/InicioCard.php";

        $bulbasaur = new InicioCard(
          "bulbasaurCard",
          "img/bulbasaur.svg",
          "",
          "bulbasaur",
          "Bulbasaur"
        );
        $charmander = new InicioCard(
          "charmanderCard",
          "img/charmander.svg",
          "",
          "charmander",
          "Charmander"
        );
        $pikachu = new InicioCard(
          "pikachuCard",
          "img/pikachu.svg",
          "",
          "pikachu",
          "Pikachu"
        );
        $squirtle = new InicioCard(
          "squirtleCard",
          "img/squirtle.svg",
          "",
          "squirtle",
          "Squirtle"
        );

        echo '<div class="pokemonsContainer d-flex justify-content-center">';
        $bulbasaur->display();
        $charmander->display();
        $pikachu->display();
        $squirtle->display();
        echo "</div>";
        ?>
      </div>
    </section>

    <section id="cartas">
      <div class="container">
        <h2 class="text-center">Cartas Destacadas</h2>
      <div class="row">
      <?php
      require_once "php/DestacadasCard.php";

      $cards = [
        new DestacadasCard("img/card1.svg", "", "$1000", "img/card1.svg", ""),
        new DestacadasCard("img/card2.svg", "", "$1000", "img/card2.svg", ""),
        new DestacadasCard("img/card3.svg", "", "$1000", "img/card3.svg", ""),
      ];

      foreach ($cards as $card) {
        echo '<div class="col">';
        $card->display();
        echo "</div>";
      }
      ?>
      </div>
      </div>
    </section>

    <section id="contacto"></section>

    <script
      src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
      integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
      crossorigin="anonymous"
    ></script>
    <script src="js/navbar.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
