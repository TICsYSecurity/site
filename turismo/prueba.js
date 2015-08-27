var matriz = new Array();
var matriz_2 = new Array("Diego", "Alejandro", "forero");
var i = 0;
matriz[i] ="inicio";
do{	
	i++;
	matriz[i] = prompt("Elemento" + i);
}while(matriz[i] != "fin");
//alert(matriz);
//metodo concat
var matriz_3 =  matriz_2.concat(matriz);
//alert(matriz_3);

//metodo join
var cadena = matriz_2.join("_");
//alert(cadena);
//metodo pop elimina ultimo
matriz.pop();

//metodo shift elimina primero
matriz.shift();

//unshift para agregar al principio
matriz.unshift("Daniel", "Danfor");

//alert(matriz);

//push para agregar
matriz_2.push("Posada", "Redondo", "Pineda");
alert(matriz_2);

//reverse
//matriz_2.reverse();
//alert(matriz_2);

//slice  formar matriz apartir de pedaso de otra
var matriz_aux = matriz_2.slice(1, 4);
alert(matriz_aux);

//splice 
matriz_aux = matriz_2.splice(0,2, "Emilio", "de los angeles");
alert(matriz_aux + "---" + matriz_2);

//añdir propiedad
Array.prototype.parentesco = "";
matriz_aux.parentesco = "Hermano :D";
alert(matriz_aux.parentesco);