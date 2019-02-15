
 
//id elements
let input = document.getElementById("input"); 
let save = document.getElementById("saved"); 
let show = document.getElementById("show"); 

let box = [];

save.addEventListener("click",(e)=>{
	box.push(input.value);
	input.value = ''
	console.clear()
},false);

show.addEventListener("click",(e)=>{
	for(let i =0; i<box.length; i++){
		console.log(box[i])

	}
},false);





