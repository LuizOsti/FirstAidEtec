<?php require("sessao.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="iconesite.png">
    <link rel="stylesheet" type="text/css" href="styleeditar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FirstAid.com</title>
    <script>
        function validarFormulario() {
            var publicacao = document.forms["publitxt"]["publicacao"].value;

            // Validar se o campo de publicação está vazio
            if (publicacao.trim() === "") {
                alert("O campo de publicação não pode estar vazio.");
                return false;
            }

            // Validar se a publicação excede 150 caracteres
            if (publicacao.length > 500) {
                alert("A publicação não pode ter mais de 500 caracteres.");
                return false;
            }

            // Se todas as validações passaram, o formulário pode ser enviado
            return true;
        }
    </script>
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

    <?php
    require("sessao.php");
    $email = $_SESSION['email'];
    $nome = $_SESSION['nome'];
    $pergunta= $_POST['pergunta'];
    $id_pergunta= $_POST['id_pergunta'];
    require("dbconnect.php");
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
        <span>EDITE SUA PERGUNTA</span>
            <form class="formulario-editar" enctype="multipart/form-data" name="publitxt" method="POST" action="editar1-2.php" id="form" onsubmit="return validarFormulario();">
                <textarea name="publicacao" rows="10" cols="50"  maxlength="500" autofocus style="resize: none"><?php echo $pergunta; ?></textarea>
                <input type="hidden" name="id_pergunta" value="<?php echo $id_pergunta; ?>">
                <input type="submit" name="btn_enviar" value="EDITAR">
                <input type="button" name="btn_cancela" value="CANCELAR" onclick="window.location.href='forum.php'"></input>
            </form>
        </div>
</div>

</body>
</html>