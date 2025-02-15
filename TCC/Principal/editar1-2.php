<?php require("sessao.php"); ?>
<script>
    
        function funcionou(mensagem) {
            alert(mensagem); 
            window.location.href = "perfilusuario.php";          
        }
    </script>
<?php
require("dbconnect.php");
$id_pergunta=$_POST['id_pergunta'];
$pergunta=$_POST['publicacao'];
	$sql ="UPDATE `perguntas` SET `pergunta` = (?) where id_pergunta = ('$id_pergunta')";
	$stmt = mysqli_prepare($linkDB,$sql);
	if (!$stmt) {
	die("Erro ao editar: " . mysqli_error($linkDB));
	}
	if (!mysqli_stmt_bind_param($stmt,"s",$pergunta)) {
	die("Não foi possível vincular parametros");
	}
	if (!mysqli_stmt_execute($stmt)) {
	    echo'<script>funcionou("Não foi possível editar");</script>';
	    echo '<script>window.location.href = "forum.php";</script>';
	} else {
 	echo '<script>window.location.href = "forum.php";</script>';
 }
?>