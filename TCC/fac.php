<?php session_start(); ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
		<link rel="icon" type="image/png" href="iconesite.png">
		<link rel="stylesheet" type="text/css" href="stylefac.css">
		<title>FirstAid.com</title>
</head>
  <body>

<div class="fotofundo">
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
    
    <div class="container"></div>

</div>

  </body>
</html>

 