
<?php

$conection = new mysqli("127.0.0.1","root","","firstdb");


if(mysqli_connect_errno($conection)){
	echo "Hubo errores " . mysqli_connect_error() . PHP_EOL;
}
 






