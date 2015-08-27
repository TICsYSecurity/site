var alfabeto = new Array(" ", "Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "Ñ", "O","P", "Q", "R","S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", 0, 1, 2, 3, 4, 5, 6, 7 ,8 , 9, ".", ",", ";", "@", "_", "-", "+", "*", "/", "\\", "N", "n", "(", ")", "[", "]", "<", ">", "\"", "'", "%", "&", "=", "ü");
var comun = new Array(" ", "de", "es", " el ", " la ", " de ", " su ", " en ", "que", "le");
var rta_clave = 0;
var rta_msg = "";
var rta_sum = "";
var sumatoria = 0;
var posi = 0;
var buscar = 0;
var auxiliar = 0;

function criptoanalisis(txt, cla){
	sumatoria = 0;
		for (var i = 0; i < comun.length; i++) {
			posi = 0;
			buscar = 0;
			auxiliar = 0;
			do{
				posi = txt.indexOf(comun[i], buscar);
				if(posi != -1){
					auxiliar ++;
					buscar = posi +1;
				}
			} while(posi != -1);
			sumatoria += auxiliar;
		}
			if(sumatoria > rta_sum){
				rta_sum =sumatoria;
				rta_msg = txt;
				rta_clave = 97 -cla;
				//document.write("nueva clave: " + rta_clave + " nuevo msg " + rta_msg + "<br>");
			}
}
function correr(){
	var msg = $("#msg_analizar").val();
	var textoEnviar = "";
	var n = 0;
	var num = 0;
	for (var i = 0; i < alfabeto.length; i++) {
		textoEnviar = "";
		for (var j = 0; j < msg.length; j++){
			if(msg[j] == "0" || msg[j] == "1" || msg[j] == "2" || msg[j] == "3" || msg[j] == "4" || msg[j] == "5" || msg[j] == "6" || msg[j] == "7" || msg[j] == "8" || msg[j] == "9"){
				num = parseInt(msg[j]);
				n = alfabeto.indexOf(num);
			}else{
				if (msg[j] == " "){n =0;}
				else{n = alfabeto.indexOf(msg[j]);}
			}
			textoEnviar += alfabeto[(n + i) % 97];
		}
		//document.write("Texto " + i + " : " + textoEnviar + "<br>");
		criptoanalisis(textoEnviar, i);
	};
	$("#rta_clave").html("La clave es: " + rta_clave);
	$("#rta_analizar").html(rta_msg);
}
//correr(texto);