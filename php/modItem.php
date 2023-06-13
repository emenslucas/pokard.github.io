<!DOCTYPE html>
<html lang="es">

<?php
require_once "config.php";
include_once "head.php";
?>

<body>
	<section id="modificarItem">
		<div class="container">
			<?php
			session_start();
			include_once "header.php";

			if (mysqli_connect("localhost", "root", "", "pokard")) {

				$con = mysqli_connect('localhost', 'root', '', 'pokard');
				if (isset($_GET['idProducto'])) {
					$idCarta = $_GET['idProducto'];
					$nombreCarta = $_GET['nombreProducto'];

					$consulta = "SELECT id, nombre FROM carta WHERE id='$idCarta'";

					if ($resultado = mysqli_query($con, $consulta)) {
						//GUARDA el RESULTADO DE "consulta SQL"
						$fila = mysqli_fetch_array($resultado);
						echo "<h1>Modificar Producto</h1>";

						echo "<form action='modItem2.php' method='POST'>";
						echo "<p>$fila[id]</p>";

						echo "<input type='hidden' name='idProducto' value=$fila[id]>";

						echo "<input type='text' name='nombreProducto' value=$fila[nombre]>";

						echo "<input type='submit' value='Modificar'>";

						echo "</form>";
					}
				}
			} else {

				echo "No se pudo modificar la carta: $nombreCarta";
			}

			?>

		</div>
	</section>
</body>

</html>