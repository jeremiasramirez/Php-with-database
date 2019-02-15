
class Usuario{
	constructor(nombre,edad){
		this.nombre = nombre;
		this.edad  = edad;
	}
	getData(){
		console.log("Nombre: " + this.nombre);
		console.log("Edad: " + this.edad);
	}
}

let u1 = new Usuario("jeremias",18);
	u1.getData();
