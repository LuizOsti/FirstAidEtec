<?php require("sessao.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro Cad</title>
	<script>
    
        function funcionou(mensagem) {
            alert(mensagem); 
            window.location.href = "cadusuario.html";          
        }
        function funcionou2(mensagem) {
            alert(mensagem); 
            window.location.href = "index.html";          
        }
    </script>
</head>
<body>
	<?php
		require("dbconnect.php");
		require("criptografia.php");
    require("sessao.php");
		$email = $_SESSION['email'];
    $email = strtolower($email);
		$nome = $_SESSION['nome'];
		$senha = $_SESSION['senha'];
		$senha2 = $_SESSION['senha2'];
    $token_digitado=$_POST['tokenDigitado'];
    $token=$_SESSION['token'];

    if($token_digitado == $token)
    {
    if($senha == $senha2)
    {

    //INSERE EM USUARIO
      $senhabd=FazSenha($senha,$nome);
   		$sql = "insert into usuario (nome, email, senha) values (?,?,?)";
      $stmt = mysqli_prepare($linkDB,$sql);
      if (!$stmt) {
       die("Erro ao cadastrar: " . mysqli_error($linkDB));
      }
      if (!mysqli_stmt_bind_param($stmt,"sss",$nome,$email,$senhabd)) {
        die("Não foi possível vincular parametros");
      }
    //INSERE EM PERFIL
      $imgpadrao = base64_encode(file_get_contents('imagempadrao.png'));
      $tipopadrao = 'image/png';

      $sql2 = "INSERT INTO perfil (nome, email, img, tipoImg) VALUES (?, ?,?,?)";   
      $stmt2 = mysqli_prepare($linkDB,$sql2);
      if (!$stmt2) {
        die("Erro ao cadastrar 2: " . mysqli_error($linkDB));
      }
      if (!mysqli_stmt_bind_param($stmt2,"ssss",$nome,$email,$imgpadrao,$tipopadrao)) {
        die("Não foi possível vincular parametros");
      }
    // CONFIRMA
      if (!mysqli_stmt_execute($stmt) || !mysqli_stmt_execute($stmt2)) {
        echo'<script>funcionou("Não foi possível executar cadastro no banco de dados");</script>';
      }else{
        echo '<script>funcionou2("Usuario Cadastrado com Sucesso.");</script>';
      }
    } else {
      echo'<script>funcionou("Senhas não coencidem");</script>';
    }    
  } else{
      echo '<script>window.location.href = "confirmacad2.php";</script>';
    }
	?>
</body>
</html>