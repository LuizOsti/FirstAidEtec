<?php require("sessao.php"); ?>
<?php
require("dbconnect.php");
 if (empty($resposta)) {
            echo '<script>exibirErro("Por favor, preencha todos os campos.");</script>';
        }
$id_pergunta=$_POST['id_pergunta'];
$resposta=$_POST['publicacao'];
	$sql ="UPDATE `respostas` SET `resposta` = (?) where id_pergunta = ('$id_pergunta')";
	$stmt = mysqli_prepare($linkDB,$sql);
	if (!$stmt) {
	die("Erro ao editar: " . mysqli_error($linkDB));
	}
	if (!mysqli_stmt_bind_param($stmt,"s",$resposta)) {
	die("Não foi possível vincular parametros");
	}
	if (!mysqli_stmt_execute($stmt)) {
	    echo'<script>funcionou("Não foi possível editar");</script>';
	    echo '<script>window.location.href = "forum.php";</script>';
	} else {
 	echo '<script>window.location.href = "forum.php";</script>';
 }
?>