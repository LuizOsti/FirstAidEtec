<?php require("sessao.php"); ?>
<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
		<title>RecuperarSenha</title>
	</head>
	<body>
		
<?php
	$email = $_POST['email'];
	$email = strtolower($email); 
		require("dbconnect.php");
		require("email.php");
		require("functions.php");
		$sql="select email from usuario where email='$email'";
		$dataset=mysqli_query($linkDB,$sql);
		while ($linha = mysqli_fetch_assoc($dataset)) {
            $emailbanco = $linha['email'];
        }
        if($email == $emailbanco && $emailbanco != ""){
        $token=GeraAlgo('6');
		$praquem=$email;
		$emailDeQuem=$email;
		$texto ="Token: '$token'";

		mandarEmail($praquem,$emailDeQuem,"Recuperar Senha",$texto);
            $_SESSION['id'] = session_id();
            $_SESSION['email'] = $email;
            $_SESSION['token'] = $token;
        	echo '<script>window.location.href = "recuperarSenha3.php";</script>';
        } else {
        	echo '<script>window.location.href = "recuperarSenha.html";</script>';
        }
	?>
        
</body>