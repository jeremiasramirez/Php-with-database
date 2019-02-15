<?php

include("conect_to_database.php");


$consulta = mysqli_query($conection,"SELECT nombre FROM usuarios");
echo "<h2>usuarios</h2>";
while($row= mysqli_fetch_assoc($consulta)){
	echo "<li>" . $row['nombre'] . "</li>" . PHP_EOL;
}











?>


 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Herencia</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	

 <h1>Proceso completado</h1>
	<a href="modle.php">regresar</a>
</body>
</html>