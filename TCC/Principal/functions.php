<?php require("sessao.php"); ?>
<?php
function RecuperaImagem() {
    require("sessao.php");
    require("dbconnect.php");
    global $email;
    $email = $_SESSION['email'];

    $sql = "SELECT img, tipoImg FROM perfil WHERE email='$email'";
    $dataset = mysqli_query($linkDB, $sql);

    while ($linha = mysqli_fetch_assoc($dataset)) {
        $img = $linha['img'];        
    }

    return $img;
}
function GeraAlgo($tamanho) {
    $numeros = '0123456789';
    $novoId = '';

    for ($i = 0; $i < $tamanho; $i++) {
        $sorte = intval(rand(0, 9));
        $novoId .= substr($numeros, $sorte, 1);
    }

    return $novoId;
}

function CriaId($nome){
	$meionome = substr($nome,0, 6);
	$arroba = "@".$meionome.GeraAlgo(3);
	return $arroba;
}


?>