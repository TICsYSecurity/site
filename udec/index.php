<html>
<head>
	<title>CESAR</title>
  	<meta charset="utf-8">
	<link href="otros/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src ="otros/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src = "criptoCesar.js">
	</script>
	<script type="text/javascript">
		var alfabeto = new Array(" ", "Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "Ñ", "O","P", "Q", "R","S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", 0, 1, 2, 3, 4, 5, 6, 7 ,8 , 9, ".", ",", ";", "@", "_", "-", "+", "*", "/", "\\", "N", "n", "(", ")", "[", "]", "<", ">", "\"", "'", "%", "&", "=", "ü");
		var msg_encriptar = "";
		var msg_desencriptar = "";
		var clave = 0;
		var respuesta = "";
		
		function desencriptar(){
			var i = 0;
			respuesta = "";
			msg_desencriptar = $("#msg_des").val();
			clave = $("#clave").val();
			clave = parseInt(clave);
			if(isNaN(clave)){
				$("#resultado").html("La clave debe ser un valor númerico");
			}
			else{
				for (var j = 0; j < msg_desencriptar.length; j++) {
					if (msg_desencriptar[j] == " "){

						if(alfabeto[ Math.abs((97 - clave)%97)] == " " || alfabeto[ Math.abs((97-clave)%97)] == "0"){
							if(alfabeto[ Math.abs((97 - clave)%97)] == "0"){respuesta += "0";}
							else{respuesta += "&nbsp";}
						}else{
							respuesta += alfabeto[ Math.abs((97 - clave) % 97)];
						}	
					}else{
						if(msg_desencriptar[j] == "0" || msg_desencriptar[j] == "1" || msg_desencriptar[j] == "2" || msg_desencriptar[j] == "3" || msg_desencriptar[j] == "4" || msg_desencriptar[j] == "5" || msg_desencriptar[j] == "6" || msg_desencriptar[j] == "7" || msg_desencriptar[j] == "8" || msg_desencriptar[j] == "9"){
							var num = parseInt(msg_desencriptar[j]);
							i = alfabeto.indexOf(num);
						}
						else{i = alfabeto.indexOf(msg_desencriptar[j]);}
						var numero = 0;
						if( ( (i-clave) % 97 ) < 0){numero = 97 - Math.abs( (i-clave) % 97 );}
						else{numero = ( (i-clave) % 97 );}
						//alert("La posicion es: " + i + ". La equivalencia es: " + numero);
						if(alfabeto[numero] == " " || alfabeto[numero] == "0"){
							if (alfabeto[numero] == "0"){respuesta += "0"}
							else{respuesta += "&nbsp;"}
						}else{
							respuesta += alfabeto[numero];
						}
					}
				}
				$("#resultado").html("RESULTADO: <B>" + respuesta + "</B>");
			}
		}
		function encriptar(){
			respuesta = "";
			msg_encriptar = $("#msg_enc").val();
			clave = $("#clave").val();
			clave = parseInt(clave);

			if(isNaN(clave)){
				$("#resultado").html("La clave debe ser un valor númerico");
			}
			else{
				for (var j = 0; j < msg_encriptar.length; j++) {
						if (msg_encriptar[j] == " "){
							if(alfabeto[((clave)%97)] == " " || alfabeto[((clave)%97)] == "0"){
								if(alfabeto[((clave)%97)] == "0"){respuesta += "0";}
								else{respuesta += "&nbsp";}
							}else{
								respuesta += alfabeto[(clave % 97)];
							}
						}
						else{
							for (var i = 1; i < alfabeto.length; i++){
								if (alfabeto[i] == msg_encriptar[j]){
									if(alfabeto[((i+clave)%97)] == " " || alfabeto[((clave)%97)] == "0"){
										if(alfabeto[((i+clave)%97)] == "0"){respuesta += "0";}
										else{respuesta += "&nbsp";}
									}else{
										respuesta += alfabeto[((i+clave)%97)];
										break;
									}
								}
							}
						}
				}
				$("#resultado").html("RESULTADO: <B>" + respuesta + "</B>");
			}
			
		}
	</script>
</head>
<body>
	<nav id="navegador">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<center>
						<h1>SEGURIDAD UDEC</h1>
						<a class="navbar-brand" href="index.php"><i class="fa fa-desktop"></i><img src="otros/escudo.JPG" width="40%" height="20%" /></a>
						</center>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php"><i class="fa fa-home"></i>CESAR</a></li>
							<li><a href="index.php"><i class="fa fa-lock"></i>POLIALFABETICO</a></li>
							<li><a href="index.php"><i class="fa fa-bar-chart-o"></i>PERMUTACION</a></li>
						</ul>
					</div>
				</div>
			</div>
	</nav>
	<section>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<hr size = 4>
		<div class="container">
			<h3><span class="label label-success">Alfabeto utilizado</span></h3><br>
			<div class="table-responsive">
				<?php
			    	$alfabeto = array("&nbsp;", "Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "Ñ", "O","P", "Q", "R","S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", 0, 1, 2, 3, 4, 5, 6, 7 ,8 , 9, ".", ",", ";", "@", "_", "-", "+", "*", "/", "\\", "N", "n", "(", ")", "[", "]", "<", ">", "\"", "'", "%", "&", "=", "ü");
			      	echo "<table class='table table-borderer'>";
			      	echo "<tr class='success'>";
			      	for ($i=0; $i < count($alfabeto) ; $i++) {
			       		echo "<td class='success'>".$alfabeto[$i]."</td>";
			        	if ($i == 10 || $i == 21 || $i == 32 || $i == 43 || $i == 54 || $i == 65 || $i == 76 || $i == 87 || $i == 96)  {
			          		echo "</tr><tr class='success'>";
			        	}
			      	}
			      	echo "</tr>";
			      	echo "</table>";
			    ?>
			</div>
		</div>
		<hr size = 4>
		<div class="container">
			<center>
			<div class="row">
				<h3><span class= "label label-success">CIFRADO CESAR</span></h3>
				<BR>
				<h4><span class= "label label-default">Clave:</span></h4>
				<input type="text" id="clave" placeholder="Ej: 56"/>
			</div>

			<div class="row">
				<div class="col-md-6">
				  	<input type="text" id="msg_enc" placeholder="Mensaje a encriptar"/>
				  	<button type="button" class="btn btn-primary" onClick="encriptar();">CIFRAR</button>
				</div>

			  	<div class="col-md-6">
				  	<input type="text" id="msg_des" placeholder="Mensaje a decencriptar"/>
				  	<button type="button" class="btn btn-info" onClick="desencriptar();">DECIFRAR</button>
			  	</div>

			</div>
			</center>
			<div class="row">
				<h3>
			  	<div class="alert alert-info" role="alert" id = "resultado">RESULTADO</div>
				</h3>
			</div>
			
		</div>
		<hr size = 4>
		<div class = "container">
			<div class="row">
				<center><h3><span class="label label-warning">CRIPTOANALISIS CESAR</span></h3></center>
			</div>
			<div class="row">
				<h4><span class="label label-default">Introuduzca el texto a analizar a continuacion: </span></h4>
				<textarea class="form-control" rows="3" id = "msg_analizar">
				</textarea>
				<button type="button" class="btn btn-warning" onClick="correr();">ANALIZAR</button>
			</div>
			<div class="row">
				<h3>
			  	<div class="alert alert-warning" role="alert" id = "rta_clave">CLAVE</div>
				</h3>
			</div>
			<div class="row">
				<h4><span class="label label-warning">El texto desencriptado es:</span></h4>
				<textarea class="form-control" rows="3" id = "rta_analizar">
				</textarea>
			</div>			
		</div>

		
	</section>
	<br><br><br>
	<footer>
		<div id="f">
		<div class="container" align="right">
			<div class="row centered">
				<a href="https://www.gnu.org/gnu/linux-and-gnu.html" target="_blank"><i class="fa fa-linux"></i></a><i class="fa fa-google-plus-square"></i>
				<br><font size=6><b data-toggle="modal" data-target="#myModal" href="#myModal">ELECTIVA PROFESIONAL lll - 2015</b></font>
							<p>Daniel Foero 310 867 4210 <a data-toggle="modal" data-target="#myModal" href="#myModal">daniel.forero93@gmail.com</a>
								</b>
							</p>
			</div><!-- row -->
		</div><!-- container -->
		</div>
		</footer>	
</body>
</html>