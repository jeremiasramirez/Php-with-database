<?php 
  
class Personas{

	protected $nombre;
	protected $apellido;

	public function __construct($nombre,$apellido){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}

	public function setName($newNombre){
		return $this->nombre = $newNombre;
	}
	public function setLastName($newLastName){
		return $this->apellido = $newLastName;
	}
	public function getName(){
		echo "<h1>Nombre: </h1>";
		echo "<li>Nombre: " . $this->nombre ."</li>". PHP_EOL;
	}
	public function getLastName(){
		echo "<h1>Apellido: </h1>";
		echo "<li>Apellido: " . $this->apellido ."</li>". PHP_EOL;
	}
	function printCharacteristic(){
		echo "<h1>Padre</h1>";
 		echo "<li>Nombre: ". $this->nombre . "</li> " . PHP_EOL;
 		echo "<li>Apellido: ". $this->apellido . "</li> " . PHP_EOL;
 	}
}
 class Hijo extends Personas{
 	protected $curso;
 	protected $deporte;
 	public function __construct($curso,$deporte){
 		$this->curso = $curso;
 		$this->deporte = $deporte;
 	}
 	public function setNames($newName){
 		return $this->nombre = $newName;
 	}
 
 	public function setLastNames(){
 		return $this->nombre . PHP_EOL;
 	}
 
 	 public function setCourse($newCourse){
 		return $this->curso = $newCourse;
 	}
 	public function getCourse(){
 		return $this->curso . PHP_EOL;
 	}
 	public function setDeporte($newDeporte){
 		return $this->deporte = $newDeporte;
 	}
 	public function getDeporte(){
 		return $this->deporte . PHP_EOL;
 	}
 	function printCharacteristics(){

		echo "<h1>Hijo</h1>";
 		echo "<li>Nombre: ". $this->nombre . "</li> " . PHP_EOL;
 		echo "<li>Apellido: ". $this->apellido . "</li> " . PHP_EOL;
 		echo "<li>Curso: ". $this->curso . "</li> " . PHP_EOL;
 		echo "<li>Deporte: ". $this->deporte . "</li> " . PHP_EOL;
 	}
 	
 }

$p2 = new Personas("","");
	$p2->setName("Alfredo");
	$p2->setLastName("fernandez");

 



$p1 = new Hijo("","");

$p1->setNames("Jeremias");
$p1->setLastName("ramirez");
$p1->setDeporte("baseball");
$p1->setCourse("1ero");

 $p2->printCharacteristic();
 $p1->printCharacteristics();



 

// antes de rehusar las funciones(metodos) del padre
// echo $p1->getNames();
// echo $p1->getLastNames();
// echo $p1->getCourse();
// echo $p1->getDeporte();


























	
 

 ?>






<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Herencia</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	

<a href="process.php">Ir a proceso</a>



</body>
</html>

 