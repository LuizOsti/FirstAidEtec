<?php require("sessao.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  	<link rel="icon" type="image/png" href="iconesite.png">
	<link rel="stylesheet" type="text/css" href="stylesobre.css">
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
  
  <div class="container">

    
    <div class="textoguilherme comum"> 
      <img src="berno.jpg" class="guilherme">
        <h>DOCUMENTAÇÃO, FRONT END CSS/JAVASCRIPT/HTML</h><br>
        Nome: Guilherme Berno Calegari
      </div>
   

    
      <div class="textonicole comum"> 
      <img src="nicole.jpg" class="nicole">
        <h>DOCUMENTAÇÃO, DESIGN GRAFICO/WEB DESIGN</h><br>
        Nome: Nicole Karoline Moreira Gonçalves
      </div>
    


    
      <div class="textoosti comum"> 
      <img src="osti.jpg" class="osti">
        <h>DOCUMENTAÇÃO, BACK END/PHP/BANCO DE DADOS</h><br>
        Nome: Luiz Felipe de Souza Osti
      </div>
    

    
      <div class="textorick comum"> 
      <img src="rick.jpg" class="rick">
        <h>DOCUMENTAÇÃO, BACK END/PHP/BANCO DE DADOS</h><br>
        Nome: Henrique Augusto de Souza
      </div>
    
  
    <div class="textobeatriz comum"> 
      <img src="beatriz.jpeg" class="beatriz">
        <h>DOCUMENTAÇÃO E SUPERVISORA FRONT END</h><br>
         Nome: Beatriz Moreira da Silva
     </div>
   

    
    <div class="textofusca comum"> 
      <img src="fusca.jpg" class="fusca">
        <h>DOCUMENTAÇÃO, SUPERVISOR GERAL</h><br>
        Nome: Luís Guilherme do Canto<br>
        </div>
  </div>

<div class="titulo">

		<div class="titulotexto">
			FIRST AID.COM
			<img class="iconesite" src="iconesite.png" onclick="window.location.href='menu.php'">
		</div>


		<form method="POST" action="pesquisar.php">
			<input type="text" name="pesquisa" value="" placeholder="Pesquisar" class="input-pesquisa"></input>
            <input type="submit" class="input-envia" value="Pesquisar"></input>
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

<div class="qr-code">
  <img src="qrcode.jpg" alt="">
  <span>Faça o download do nosso app<br>aponte sua camera para esse qr code na tela</span>
</div>

</body>
</html>