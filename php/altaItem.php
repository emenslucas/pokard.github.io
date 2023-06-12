<?php
$con = mysqli_connect('localhost', 'root', '', 'pokard');
if ($con) {
  if (isset($_POST["name"]) and isset($_POST["price"])) {
    $nombre = $_POST["name"];
    $precio = $_POST["price"];
    $poder = $_POST["power"];
    $energia = $_POST["energy"];
    $img = $_FILES["image"]["name"];

    $consulta = "INSERT INTO carta (nombre, precio, poder, descripcion, imagen, id_energia) VALUES ('$nombre', '$precio', '$poder','', '$img', '$energia')";
    if ($resultado = mysqli_query($con, $consulta)) {
      header("Location: panel.php?item=ok");
    } else {
      header("Location: panel.php?error=error");
    }
  }
}
