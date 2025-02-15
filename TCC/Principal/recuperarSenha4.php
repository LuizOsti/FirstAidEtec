<?php require("sessao.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="iconesite.png">
    <link rel="stylesheet" type="text/css" href="stylerecuperarSenha4.css">
    <meta charset="utf-8">
    <title>FirstAid.com</title>
</head>
<body>

<?php
require("sessao.php");

if (isset($_POST['tokenDigitado'])) {
    $token_digitado = $_POST['tokenDigitado'];
    $token = $_SESSION['token'];

    if ($token_digitado == $token) {
        ?>
        <div class="fotofundo">
            <div class="container">
                <div class="textopagina">
                    RECUPERAR SUA SENHA
                </div>
                <span>INSIRA SUA NOVA SENHA</span>
                <form name="tokensenha" method="POST" action="recuperarSenha5.php">
                    <input type="password" name="senha" placeholder="Digite sua nova senha:" class="inputemail">
                    <input type="submit" name="btnEnvio" value="ENVIAR" class="enviaformulario">
                </form>
                

                <div class="titulo">
                    <img class="iconesite" src="iconesite.png">
                    <div class="titulotexto">
                        FIRST AID.COM
                    </div>
                </div>
            </div>
        </div>
        </body>
        </html>

        <?php
    } else {
        echo '<script>window.location.href = "recuperarSenha3.php";</script>';
    }
} else {
    echo 'Token não encontrado.';
}
?>