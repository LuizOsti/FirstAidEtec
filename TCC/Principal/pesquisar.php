<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="icon" type="image/png" href="iconesite.png">
	<link rel="stylesheet" type="text/css" href="stylepesquisar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pesquisar</title>
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
	<?php
              require("dbconnect.php");
              require("sessao.php");

                 
				$pesquisa = $_POST['pesquisa'];

				$sql = "select nome, email,tipoImg,img from perfil where nome like '%$pesquisa%'";
				$dataset = mysqli_query($linkDB, $sql);
			 
				while($linha = mysqli_fetch_assoc($dataset)){
					$nome = $linha['nome'];
					$email = $linha['email'];
					$tipoImg=$linha['tipoImg'];
       			 	$img_perfil2 = 'data:' . $tipoImg . ';base64,' . $linha['img'];

					?>
					<div class="area-perfil">					
						<a href="verperfil.php?id=<?php echo "$email";?>">
							<img src="<?php echo $img_perfil2;?>" style="height: 60px;width: 60px;">
							<span><?php echo "$nome";?></span>
						</a>
				</div>

					<?php
				}
		?>
	</div>

	<div class="titulo">

		<div class="titulotexto">
			FIRST AID.COM
			<img class="iconesite" src="iconesite.png" onclick="window.location.href='menu.php'">
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
				
</body>
</html>
              