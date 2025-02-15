<?php require("sessao.php"); ?>
<!DOCTYPE html>
	<html>
	<head>
    <link rel="icon" type="image/png" href="iconesite.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
		<link rel="stylesheet" type="text/css" href="stylepaginausuario.css">
	<meta charset="utf-8">
		<title>FirstAid.com</title>
	</head>
	<body>
    <?php
    //MEU PHP AQUI VC NAO PRECISA MEXER
    require("sessao.php");
    require("dbconnect.php");
    $email = $_SESSION['email'];

    $sql_perfil="select nome,idade,sexo,redes,biografia, img, tipoImg from perfil where email='$email'";
    $dataset1=mysqli_query($linkDB,$sql_perfil);

        if (!$dataset1) {
            die("Erro ao buscar informações do perfil: " . mysqli_error($linkDB));
        }
        while ($linha = mysqli_fetch_assoc($dataset1)) {
            $nome = $linha['nome'];
            $biografia = $linha['biografia'];
            $idade = $linha['idade'];
            $sexo = $linha['sexo'];
            $redes = $linha['redes'];
            $tipoImg = $linha['tipoImg'];
            $img_perfil = 'data:' . $tipoImg . ';base64,' . $linha['img'];
        }
    //MEU PHP AQUI VC NAO PRECISA MEXER
    ?>


<div class="fotofundo">
    <div class="titulo">

            <div class="titulotexto">
            FIRST AID.COM
            <img class="iconesite" src="iconesite.png">
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
     
        
    <div class="container">
        <div class="containerimagem">
            <img class="imgusuario" src="<?php echo $img_perfil;?>">
            <img class"imgusuario" src="FirstAidAPP.png">
        </div>
        
        <div class="informacaoperfil">
            <div class="informacaoperfiltexto">
            NOME: <?php echo $nome; ?><br><br>
            IDADE: <?php echo $idade; ?><br><br>
            <?php $sexo = wordwrap($sexo, 25, "<br />\n", true); ?>
            SEXO: <?php echo $sexo; ?><br><br>
            <?php $redes = wordwrap($redes, 25, "<br />\n", true); ?>
            REDES: <?php echo $redes; ?><br><br>
            <?php $biografia = wordwrap($biografia, 25, "<br />\n", true); ?>
            BIOGRAFIA: <?php echo $biografia; ?>
        </div>
    </div>
    
    
        <button class="desloga" onclick="window.location.href='deslogasessao.php'">DESLOGAR</button>
        <button class="editar" onclick="window.location.href='editarperfil1.php'">EDITAR PERFIL</button>
    </div>
    
</div>

	
	</body>
</html>