<?php require("sessao.php"); ?>
<?php
require("dbconnect.php");
$id_pergunta=$_POST['id_pergunta'];
$id_resposta=$_POST['id_resposta'];
	$sql = "DELETE FROM `respostas` WHERE id_resposta = '$id_resposta'";
	$dataset = mysqli_query($linkDB, $sql);
	if (!$dataset) {
    die("Erro ao excluir: " . mysqli_error($linkDB));
	echo '<script>window.location.href = "forum.php";</script>';
}
	echo '<script>window.location.href = "forum.php";</script>';
?>