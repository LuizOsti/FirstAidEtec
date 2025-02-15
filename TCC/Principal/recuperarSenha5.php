<?php require("sessao.php"); ?>
<?php
 	require("dbconnect.php");
	$email = $_POST['email'];
	$senha = $_POST['senhaNova'];

	$sql=" update usuario set senha='$senha' where email='$email'";

	$stmt = mysqli_prepare($linkDB, $sql);
	   	if(!$stmt){
	   			die("Erro ao cadastrar");
	   	}
	   	if(!mysqli_stmt_execute($stmt)) {
	        die("Não foi possível executar!");
	    }
	        
	echo '<script>window.location.href = "index.html";</script>';


?>
<?php
require("dbconnect.php");
require("criptografia.php");
require("sessao.php");
$email=$_SESSION['email'];
$senha=$_POST['senha'];
$senhabd=FazSenha($senha,$email);
	$sql ="UPDATE `usuario` SET `senha` = (?) where email = ('$email')";
	$stmt = mysqli_prepare($linkDB,$sql);
	if (!$stmt) {
	die("Erro ao editar: " . mysqli_error($linkDB));
	}
	if (!mysqli_stmt_bind_param($stmt,"s",$senhabd)) {
	die("Não foi possível vincular parametros");
	}
	if (!mysqli_stmt_execute($stmt)) {
	    echo'<script>funcionou("Não foi possível salvar a nova senha");</script>';
	    echo '<script>window.location.href = "index.html";</script>';
	} else {
		require("deslogasessao.php");
 }
?>