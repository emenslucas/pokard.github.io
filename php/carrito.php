<!DOCTYPE html>
<html lang="es">

<?php include_once "head.php"; ?>

<body>
  <?php
  session_start();
  include_once "header.php";
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
  ?>

<section id="carrito">
    <div class="container">
        <?php
        // Mostrar el contenido del carrito
        if (isset($_SESSION['carrito'])) {
            echo '<h1 class="text-center pt-4 pb-4">Carrito</h1>';
            foreach ($_SESSION['carrito'] as $imagen => $carta) {
                $energiaSRC = $energias[$carta['id_energia']]['src'];
                $tipoEnergia = $energias[$carta['id_energia']]['tipo'];
                echo '<div class="container cartItem">';
                echo '<div class="d-flex justify-content-end">';
                echo '<form action="carrito.php" method="post">';
                echo '<input type="hidden" name="eliminar_imagen" value="' . $imagen . '">';
                echo '<input type="submit" value="X Eliminar del carrito" class="eliminarBtn">';
                echo '</form>';
                echo '</div>';
                echo '<div class="row p-4 pt-2">';
                echo '<div class="col-3 d-flex justify-content-center">';
                echo "<img class='imgCarta' src='../img/$imagen' alt='$imagen'>";
                echo '</div>';
                echo '<div class="col-9 p-0">';
                echo '<div class="container">';
                echo '<div class="row">';
                echo '<div class="col-8 d-flex gap-2">';
                echo "<img class='energia' src='$energiaSRC'>";
                echo "<span class='nombreCarta'>{$carta['nombre']}</span>";
                echo '</div>';
                echo '<div class="col-4 d-flex justify-content-end align-items-center">';
                echo "<span class='poder'><span class='poderSize'>PS</span> {$carta['poder']}</span>";
                echo '</div>';
                echo "<span>Tipo de energía: $tipoEnergia</span>";
                echo "<div class='comprarContainer'>";
                echo '<input type="submit" value="Comprar" class="comprarBtn">';
                echo "<span>Precio: \${$carta['precio']}</span>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>El carrito está vacío.</p>";
        }
        ?>
    </div>
</section>


  <?php
  include_once "footer.php";
  include_once "scripts.php";
  ?>

</body>

</html>