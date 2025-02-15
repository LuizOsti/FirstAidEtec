<?php
$token_digitado=$_POST['tokenDigitado'];
$token=$_POST['token'];
$email=$_POST['email'];

if($token_digitado == $token)
{
	header("Location: cadusuario.php");

} else{
	header("Location: confirmacad2.php");
}
?>