<?php
$servidorBD = "172.16.0.8";
$userDB = "21109";
$senhaDB = "peixotoryte556455";
$bancoDB = "21109";

$linkDB = mysqli_connect($servidorBD, $userDB, $senhaDB, $bancoDB);
if (!$linkDB){
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>