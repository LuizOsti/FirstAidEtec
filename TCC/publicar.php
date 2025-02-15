<?php
require("dbconnect.php");
require("sessao.php");

$publicacao = $_POST['publicacao'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];

$sql = "INSERT INTO perguntas (pergunta, email) VALUES (?, '$email')";
$stmt = mysqli_prepare($linkDB, $sql);

if (!$stmt) {
    die("Erro ao preparar a consulta");
}

// Vincule os valores aos marcadores de posição
if (!mysqli_stmt_bind_param($stmt, "s", $publicacao)) {
    die("Não foi possível vincular os parâmetros!");
}

if (!mysqli_stmt_execute($stmt)) {
    die("Não foi possível executar a consulta!");
}

// Redirecione após a inserção bem-sucedida
header("Location: forum.php");
?>