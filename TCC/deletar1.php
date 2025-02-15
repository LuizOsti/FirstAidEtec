<?php require("sessao.php"); ?>
<?php
require("dbconnect.php");
$id_pergunta=$_POST['id_pergunta'];
$respondida=$_POST['respondida'];
if ($respondida=='1') {
	echo '<script>window.location.href = "forum.php";</script>';
}
	$sql = "DELETE FROM `perguntas` WHERE id_pergunta = ('$id_pergunta')";
	$dataset = mysqli_query($linkDB, $sql);
	if (!$dataset) {
	echo '<script>window.location.href = "forum.php";</script>';
    die("Erro ao excluir: " . mysqli_error($linkDB));
}
	echo '<script>window.location.href = "forum.php";</script>';
?>