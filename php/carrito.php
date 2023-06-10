<!DOCTYPE html>
<html lang="es">

<?php include_once "head.php"; ?>

<body>
  <?php
  include_once "header.php";
  session_start();

  // Verificar si se ha enviado información de una carta para agregar al carrito
  if (isset($_POST['imagen'])) {
    $imagen = $_POST['imagen'];
    $precio = $_POST['precio'];
    $nombre = $_POST['nombre'];
    $id_energia = $_POST['id_energia'];
    $poder = $_POST['poder'];

    // Agregar la carta al carrito
    $_SESSION['carrito'][$imagen] = array(
      'precio' => $precio,
      'nombre' => $nombre,
      'id_energia' => $id_energia,
      'poder' => $poder
    );
  }

  // Verificar si se ha enviado información de una carta para eliminar del carrito
  if (isset($_POST['eliminar_imagen'])) {
    $eliminar_imagen = $_POST['eliminar_imagen'];

    // Eliminar la carta del carrito
    unset($_SESSION['carrito'][$eliminar_imagen]);
  }

  // Definir arreglo asociativo para mapear id_energia a tipo de energía y src de imagen
  $energias = array(
    1 => array('tipo' => 'Fuego', 'src' => '../img/fuego.svg'),
    2 => array('tipo' => 'Agua', 'src' => '../img/agua.svg'),
    3 => array('tipo' => 'Planta', 'src' => '../img/planta.svg'),
    4 => array('tipo' => 'Oscuridad', 'src' => '../img/oscuridad.svg')
  );

  // Agregar variable para llevar un conteo de las cartas en el carrito
  $cart_count = 0;
  ?>

  <style>
    /* Ocultar los elementos infoCard con la clase hidden */
    .hidden {
      display: none !important;
    }
  </style>

  <section id="carrito">
    <?php
    // Mostrar el contenido del carrito
    if (isset($_SESSION['carrito'])) {
      echo '<h1 class="text-center">Carrito</h1>';
      foreach ($_SESSION['carrito'] as $imagen => $carta) {
        // Incrementar el valor de $cart_count en uno cada vez que se itera sobre una carta
        $cart_count++;

        echo '<div class="container mt-4">';
        echo '<div class="row">';
        echo '<div class="col-6">';
        echo '<div class="float-end">';
        echo '<form action="carrito.php" method="post">';
        echo '<input type="hidden" name="eliminar_imagen" value="' . $imagen . '">';
        echo '<input type="submit" value="Eliminar del carrito" class="eliminarBtn">';
        echo '</form>';
        echo "<img class='imgCarta' src='../img/$imagen'>";
        echo "</div>";
        echo "</div>";

        $energiaSRC = $energias[$carta['id_energia']]['src'];
        $tipoEnergia = $energias[$carta['id_energia']]['tipo'];

        // Agregar la clase hidden al elemento col si $cart_count es mayor a 1
        $colClass = ($cart_count > 1) ? 'col-6 hidden' : 'col-6';

        echo "<div class='$colClass'>";
        echo '<div class="container d-flex infoCarta flex-column-custom">';
        echo '<div class="row">';
        echo '<div class="col d-flex gap-2">';
        echo "<img class='energia' src='$energiaSRC'>";
        echo "<span class='nombreCarta'>{$carta['nombre']}</span>";
        echo "</div>";
        echo '<div class="col d-flex align-items-center">';
        echo "<span class='poder'><span class='poderSize'>PS</span> {$carta['poder']}</span>";
        echo "</div>";
        echo "<span>Tipo de energía: $tipoEnergia</span>";
        echo "<div class='comprarContainer'>";
        echo '<input type="submit" value="Comprar" class="comprarBtn">';
        echo "<span>Precio: \${$carta['precio']}</span>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "</div>";
      }
    } else {
      echo "<p>El carrito está vacío.</p>";
    }
    ?>
  </section>

  <?php
  include_once "footer.php";
  include_once "scripts.php";
  ?>

  <script>
    function changeImgSize() {
      const cols = document.querySelectorAll('.row .col-6');

      cols.forEach(col => {
        const img = col.classList.contains('hidden') ? col.previousElementSibling.querySelector('.imgCarta') : col.querySelector('.imgCarta');
        if (img) {
          img.style.width = col.classList.contains('hidden') ? '100px' : '200px';
        }
      });
    }

    // Función para agregar evento de clic a las imágenes de las cartas
    function addClickEventToImages() {
      changeImgSize();
      const cartImages = document.querySelectorAll('#carrito img');
      cartImages.forEach(img => {
        img.addEventListener('click', () => {
          // Obtener el elemento infoCard de la primera carta
          const firstInfoCard = document.querySelector('.infoCarta');

          // Obtener el elemento infoCard de la carta que fue clickeada
          const clickedInfoCard = img.closest('.row').querySelector('.infoCarta');

          // Intercambiar el contenido de los elementos infoCard
          [firstInfoCard.innerHTML, clickedInfoCard.innerHTML] = [clickedInfoCard.innerHTML, firstInfoCard.innerHTML];

          // Mostrar el elemento infoCard de la primera carta
          firstInfoCard.style.display = 'block';

          // Obtener el contenedor de la imagen y el botón de eliminar de la primera carta
          const firstImageContainer = firstInfoCard.closest('.row').querySelector('.float-end');

          // Obtener el contenedor de la imagen y el botón de eliminar de la carta que fue clickeada
          const clickedImageContainer = img.closest('.float-end');

          // Intercambiar el contenido de los contenedores de la imagen y el botón de eliminar
          [firstImageContainer.innerHTML, clickedImageContainer.innerHTML] = [clickedImageContainer.innerHTML, firstImageContainer.innerHTML];

          // Ocultar todos los elementos infoCard excepto el primero
          const infoCards = document.querySelectorAll('.infoCarta');
          infoCards.forEach((infoCard, index) => {
            infoCard.classList.toggle('hidden', index > 0);
          });

          // Actualizar los eventos de clic en las imágenes de las cartas
          addClickEventToImages();
        });
      });
    }

    // Agregar evento de clic a las imágenes de las cartas al cargar la página
    addClickEventToImages();
  </script>
</body>

</html>