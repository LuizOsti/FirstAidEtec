<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="icon" type="image/png" href="iconesite.png">
	<link rel="stylesheet" type="text/css" href="styleindex.css">
	<title>FirstAid.Com</title>
</head>

<body>
	<div class="titulo">
		FIRST AID.COM
	</div>

	<div id="caixalogin" class="caixalogin">

		<div class="titulologin">
			LOGIN
		</div>

		<div class="campoformulario">
			<form name="login" method="POST" action="login.php">

				<input class="inputemail" type="text" name="email" require="true" placeholder="EMAIL">
				<i class="bi bi-envelope-fill"></i>
				<input class="inputsenha" type="password" name="senha" require="true" id="senha" placeholder="SENHA">
				<i class="bi bi-key-fill"></i>

		</div>

		<div class="olho-esquece">
			<span class="iconeolho"><i class="bi bi-eye-fill" id="btnsenha" onclick="mostrasenha()"></i></span>
			<a href="recuperarSenha.html"
				class="esqueceusenha">Esqueceu a senha?</a>
		</div>

		<input class="enviaformulario" type="submit" name="btnEnvio" value="LOGIN">

		<div class="botaocadastro">
			Não tem uma conta? cadastre-se:<a href="cadusuario.html"> Cadastro</a>
		</div>
	</div>
	<script type="text/javascript">
		function mostrasenha() {
			let inputPass = document.getElementById('senha')
			let btnmostrasenha = document.getElementById('btnsenha')

			if (inputPass.type === 'password') {
				inputPass.setAttribute('type', 'text')
				btnmostrasenha.classList.replace('bi-eye-slash', 'bi-eye-fill')

			}
			else {

				inputPass.setAttribute('type', 'password')
				btnmostrasenha.classList.replace('bi-eye-fill', 'bi-eye-slash')

			}

		}

	</script>


</body>

</html>