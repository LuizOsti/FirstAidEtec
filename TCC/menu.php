<?php require("sessao.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="icon" type="image/png" href="iconesite.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>FirstAid.com</title>
</head>

<body>
  <!-- Recuperando Imagem php -->
  <?php
  require("functions.php");
  require("dbconnect.php");
  require("sessao.php");

      $img = RecuperaImagem();
      $tipoImg = mime_content_type($img[0]);
      $img_perfil = 'data:' . $tipoImg . ';base64,' . $img;
  ?>
  <!-- Recuperando Imagem php -->

	<div class="fotofundo">

		<div class="container">
			<div id="imgcobra" class="quadroum">
				<img src="1.png" alt="" width="100%" height="100%">
				<button id="btn1" class="botao1" onclick="window.location.href='peçonha.php'">OQUE FAZER EM CASO DE
					ACIDENTES COM ANIMAIS PEÇONHENTOS E VENENOSOS</button>
			</div>

			<div id="imgalergia" class="quadrodois">
				<img src="2.png" alt="" width="100%" height="100%"></img>
				<button id="btn2" class="botao2" onclick="window.location.href='alergia.php'">OQUE FAZER EM CASOS DE
					ALERGIAS E CONTAMINAÇÕES</button>
			</div>

			<div id="imgsocorros" class="quadrotres">
				<img src="3.png" alt="" width="100%" height="100%">
				<button id="btn3" class="botao3" onclick="window.location.href='basico.php'">PRIMEIROS SOCORROS BASICOS
					A SE SEGUIR NO DIA A DIA</button>
			</div>

			<div id="imgfogo" class="quadroquatro">
				<img src="4.png" alt="" width="100%" height="100%">
				<button id="btn4" class="botao4" onclick="window.location.href='autorisco.php'">OQUE FAZER EM CASO DE
					SITUAÇÕES DE RISCO NO TRANSITO</button>
			</div>
		</div>

	</div>

	<div class="titulo">

		<div class="titulotexto">
			FIRST AID.COM
			<img class="iconesite" src="iconesite.png">
		</div>


		<form method="POST" action="pesquisar.php">
			<input type="text" name="pesquisa" value="" placeholder="Pesquisar Usuario" class="input-pesquisa"></input>
            <input type="submit" class="input-envia"></input>
        </form>
		<div class="botaoheader">
		
			<button id="about" class="about" onclick="window.location.href='sobre.php'"><i
			class="bi bi-question-circle"><span>SOBRE</span></i></button>
			<button id="services" class="services" onclick="window.location.href='fac.php'"><i
			class="bi bi-archive"><br><span>FAC</span></i></button>
			<button id="clients" class="clients" onclick="window.location.href='doacao.php'"><i
			class="bi bi-bag-heart"><span>DOAÇÃO</span></i></button>
			<button id="contact" class="contact" onclick="window.location.href='forum.php'"><i
			class="bi bi-chat-dots"><span>FORUM</span></i></button>
			
		</div>
		<button onclick="window.location.href='perfilusuario.php'" class="botaousuario">
		<img src="<?php echo $img_perfil;?>" class="imagemusuario"></img>
		</button>
	</div>








	</div>

</body>

</html>