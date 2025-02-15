<?php
require("dbconnect.php");

$sql = "SELECT nome FROM usuario WHERE email='$email'";
$dataset = mysqli_query($linkDB, $sql);

if ($dataset) {
    $linha = mysqli_fetch_assoc($dataset);
    if ($linha) {
        $nome = $linha["nome"];
        echo $nome;
    } else {
        echo "Nenhum resultado encontrado para o email '$email'";
    }
} else {
    echo "Erro na consulta: " . mysqli_error($linkDB);
}
?>