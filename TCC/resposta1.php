<?php require("sessao.php"); ?>
<?php
require("dbconnect.php");
require("sessao.php");
require("functions.php");

$resposta = $_POST['resposta'];
$id_resposta= $_POST['id_pergunta'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];

if($resposta=="") {
    echo '<script>window.location.href = "forum.php";</script>';
} else{

$sql = "INSERT INTO respostas (resposta, id_pergunta, email, nome) VALUES (?, ?, '$email','$nome')";
$stmt = mysqli_prepare($linkDB, $sql);

if (!$stmt) {
    die("Erro ao preparar a consulta");
}

// Vincule os valores aos marcadores de posição
if (!mysqli_stmt_bind_param($stmt, "ss", $resposta, $id_resposta)) {
    die("Não foi possível vincular os parâmetros!");
}

if (!mysqli_stmt_execute($stmt)) {
    die("Não foi possível executar a consulta!");
}

// Redirecione após a inserção bem-sucedida
echo '<script>window.location.href = "forum.php";</script>';
}
?>