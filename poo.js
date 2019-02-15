 class Persona{
	constructor(nombre){
		this.nombre = nombre;
	}
 	setNombre(newName){
 		return this.nombre = newName;
 	}
 	getNombre(){
	console.log("Nombre: "+this.nombre);
	} 	 
 }

 class Hijo extends Persona{
 	constructor(nombre,curso,deporte){
 		super(nombre);
 		this.nombre = nombre;
 		this.curso= curso;
 		this.deporte= deporte;
 	}
 	setDeporte(newDeporte){
 		this.deporte = newDeporte;
 	}
 	getDeporte(){
 		console.log("Deporte: "+this.deporte)
 	}
 	printCaract(){
 		console.log("---Hijo---");
 		console.log("Nombre: "+this.nombre)
 		console.log("Curso: "+this.curso)
 		console.log("Deporte: "+this.deporte)
 	}
 }
let p1= new Persona;
  	p1.setNombre("Jeremiass");
  

 let p2 = new Hijo;
 	 p2.setNombre("Fabricio");
	 p2.deporte = "Baseballs";
 	 p2.curso = "1ero"
 	 p2.printCaract()
	 // p2.printCaract();


 













