<?php
session_start();

// Verificar si se ha enviado información de una carta para agregar al carrito
if (isset($_POST['imagen']) && isset($_POST['precio'])) {
  $imagen = $_POST['imagen'];
  $precio = $_POST['precio'];

  // Verificar si ya existe un carrito en la sesión
  if (isset($_SESSION['carrito'])) {
    // Agregar la carta al carrito existente
    $_SESSION['carrito'][$imagen] = $precio;
  } else {
    // Crear un nuevo carrito y agregar la carta
    $_SESSION['carrito'] = array($imagen => $precio);
  }
}

// Verificar si se ha enviado información de una carta para eliminar del carrito
if (isset($_POST['eliminar_imagen'])) {
  $eliminar_imagen = $_POST['eliminar_imagen'];

  // Verificar si existe un carrito en la sesión
  if (isset($_SESSION['carrito'])) {
    // Eliminar la carta del carrito
    unset($_SESSION['carrito'][$eliminar_imagen]);
  }
}

// Mostrar el contenido del carrito
if (isset($_SESSION['carrito'])) {
  echo "<h1>Carrito</h1>";
  echo "<ul>";
  foreach ($_SESSION['carrito'] as $imagen => $precio) {
    echo "<li>";
    echo "<img src='../img/$imagen'>";
    echo "Precio: $precio";
    echo '<form action="carrito.php" method="post">';
    echo '<input type="hidden" name="eliminar_imagen" value="' . $imagen . '">';
    echo '<input type="submit" value="Eliminar" class="btn">';
    echo '</form>';
    echo "</li>";
  }
  echo "</ul>";
} else {
  echo "<p>El carrito está vacío.</p>";
}
