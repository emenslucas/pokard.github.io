<?php

if (mysqli_connect("localhost", "root", "", "pokard")) {

	$con = mysqli_connect('localhost', 'root', '', 'pokard');

	if (isset($_POST['nombreProducto']) and isset($_POST['idProducto'])) {
		$idCarta = $_POST['idProducto'];
		$nombreCarta = $_POST['nombreProducto'];

		$consulta = "UPDATE carta SET nombre='$nombreCarta' WHERE id='$idCarta'";

		if ($resultado = mysqli_query($con, $consulta)) {
			//GUARDA el RESULTADO DE "consulta SQL"
			echo "<h1>La carta $nombreCarta fue modificada. </h1>";
		}
	}
} else {
	echo "No se pudo modificar la carta: $nombreCarta";
}
