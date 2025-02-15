<?php require("sessao.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="icon" type="image/png" href="iconesite.png">
	<link rel="stylesheet" type="text/css" href="stylerecuperarSenha3.css">
	<meta charset="utf-8">
		<title>FirstAid.com</title>
	</head>
	
</head>
<body>
	<div class="fotofundo">
		<div class="titulo">

			<div class="titulotexto">
				FIRST AID.COM
			</div>
			<img class="iconesite" src="iconesite.png">


		</div>
		<div class="container">
					
				<div class="container-form">
					<span>RECUPERAÇÃO DE SENHA</span>

					<form name="token" method="POST" action="recuperarSenha4.php"> 
						<input type="text" name="tokenDigitado" require="true" class="inputemail" placeholder="Insira o Token:">		 			
						<input class="enviaformulario" type="submit" name="btnEnvio" value="ENVIAR">
					</form>
					<button class="cancela" onclick="window.location.href='index.html'">CANCELA</button>
				</div>	
		</div>
	</div>
</body>
</html>
