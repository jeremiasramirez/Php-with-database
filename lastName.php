<!DOCTYPE html>
<html>
<head>
	<title>Apellidos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="index.css">
</head>
<body>


<button class="btn-back btn-send" id="btn-send-js">Atrás</button>

 

<form action="olds.php">
	<button class="btn-send">Ir a edades</button>
</form>
	
<script src="index.js"></script>
</body>
</html>
<?php

include("conect_to_database.php");

$consLastNames = $conection->query("SELECT pais FROM usuarios");

while($row = $consLastNames->fetch_assoc()){
	echo "<strong>Apellidos</strong>: " . $row["pais"] . PHP_EOL;
	echo  "<li></li>";
}



?>


