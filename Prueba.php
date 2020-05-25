<?php
include("conexion.php");
$con=conectar();

echo "Se realizo la coneccion";

$consulta = "select * from `Alumno`";
$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Usuario</th>";
	echo "<th>Contraseña</th>";
	echo "</tr>";

	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['Clave'] . "</td><td>" . $columna['Contra'] . "</td>";
		echo "</tr>";
	}

	echo "</table>"; // Fin de la tabla

 ?>
