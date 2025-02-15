<?php
session_start();
session_cache_expire(5);

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$senha2 = $_POST['confirmasenha'];

require("email.php");
require("functions.php");
require("sessao.php");

$praquem = $email;
$emailDeQuem = $email;
$token = GeraAlgo(6);
$texto = "Muito obrigado! Para confirmar sua conta insira o token: " . $token;
mandarEmail($praquem, $emailDeQuem, "Confirmação de criação de conta", $texto);

$_SESSION['id'] = session_id();
$_SESSION['email'] = $email;
$_SESSION['token'] = $token;
$_SESSION['nome'] = $nome;
$_SESSION['senha'] = $senha;
$_SESSION['senha2'] = $senha2;

echo '<script>window.location.href = "confirmacad2.php";</script>';
exit;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="iconesite.png">
    <link rel="stylesheet" type="text/css" href="styleconfirmacad.css">
    <title>FirstAid.Com</title>
</head>
<body>
</body>
</html>