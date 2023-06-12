<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>

<body>
	<?php
	include_once "header.php";
	session_start();

	//hacer una tabla que muestre categorias modificar borrar
	echo "<section id='panel'>";
	echo "<div class='container'>";
	if (mysqli_connect("localhost", "root", "", "pokard")) {
		//servidor, usuario administrador, contraseña, base de datos 

		echo "<h1 class='mb-4'>Listado Cartas - ABM</h1>";
		echo "<a id='addCardBtn' class='mb-4' href='agregarItem.php'> + Agregar Carta</a>";

		$con = mysqli_connect('localhost', 'root', '', 'pokard');
		//guarda los datos de conexion
		$consulta = "SELECT id, nombre,precio FROM carta";
		//guarda la "consulta SQL"

		if ($resultado = mysqli_query($con, $consulta)) {
			//GUARDA el RESULTADO DE "consulta SQL"
			echo '<table class="table table-custom">';
			echo '<thead>';
			echo '<tr>';
			echo '<th scope="col">#</th>';
			echo '<th scope="col">Producto</th>';
			echo '<th scope="col">Precio</th>';
			echo '<th scope="col">Editar</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';

			$contador = 1;
			while ($fila = mysqli_fetch_array($resultado)) {
				echo '<tr>';
				echo '<th scope="row">' . $contador . '</th>';
				echo '<td>' . $fila['nombre'] . '</td>';
				echo '<td>' . $fila['precio'] . '</td>';
				echo "<td><a href=borProducto.php?nombreProducto=$fila[id]><img src='../img/editar.svg' alt=''></a><a href=borProducto.php?nombreProducto=$fila[id]><img src='../img/eliminar.svg' alt=''></a></td>";
				echo '</tr>';
				$contador++;
			}
			echo '</tbody>';
			echo '</table>';
		}
	} else {
		echo "No hay conexion";
	}
	?>
	</div>
	</section>
</body>

</html>
