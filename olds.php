
<!DOCTYPE html>
<html>
<head>
	<title>Apellidos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="index.css">
</head>
<body>



 
	<button class="btn-back btn-send" id="btn-send-js">Atrás</button>
	  
	
 
<script src="index.js"></script>
</body>
</html>
<?php
	include("conect_to_database.php");

	$consultOlds = $conection->query("SELECT edad FROM usuarios");

	while($row = $consultOlds->fetch_assoc()){
		echo "<strong>Edad:</strong> " . $row["edad"] . PHP_EOL;
		echo "<li></li>";
	}




?>