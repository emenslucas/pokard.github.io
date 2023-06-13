<!DOCTYPE html>
<html lang="es">

<?php include_once "head.php"; ?>

<body>
	<section id="eliminarItem">
		<div class="container">
			<?php
			session_start();
			include_once "header.php";

			if (mysqli_connect("localhost", "root", "", "pokard")) {

				$con = mysqli_connect('localhost', 'root', '', 'pokard');

				if (isset($_GET['idProducto'])) {
					$idCarta = $_GET['idProducto'];
					$nombreCarta = $_GET['nombreProducto'];

					$consulta = "DELETE FROM carta WHERE id='$idCarta'";

					if ($resultado = mysqli_query($con, $consulta)) {
						//GUARDA el RESULTADO DE "consulta SQL"
						echo "<h1>La carta $nombreCarta fue eliminada correctamente. </h1>";
					}
				}
			} else {
				echo "No se pudo ELIMINAR $nombreCarta";
			}
			?>
		</div>
	</section>
</body>

</html>