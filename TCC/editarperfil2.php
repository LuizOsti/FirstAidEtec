<?php require("sessao.php"); ?>
<script>
    
    function funcionou(mensagem) {
        alert(mensagem); 
        window.location.href = "perfilusuario.php";          
    }
</script>
<?php
require("dbconnect.php");
require("sessao.php");
$email = $_SESSION['email'];
$nome_val = $_SESSION['nome'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$redes = $_POST['redes'];
$biografia = $_POST['biografia'];

$imagem = $_FILES['imagem']['tmp_name'];
$tipoImg = $_FILES['imagem']['type'];

// Verifica se o arquivo foi enviado e se não está vazio
if (is_uploaded_file($imagem) && filesize($imagem) > 0) {
    $conteudo = file_get_contents($imagem);
    $conteudo = base64_encode($conteudo);
} else {
    // Se nenhum arquivo for enviado, mantenha a imagem existente
    $sql_get_image = "SELECT img, tipoImg FROM perfil WHERE email = '$email'";
    $result = mysqli_query($linkDB, $sql_get_image);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $conteudo = $row['img'];
        $tipoImg = $row['tipoImg'];
    } else {
        $conteudo = null;
        $tipoImg = null;
    }
}

// sql da tabela perfil
$sql = "UPDATE perfil SET nome = ?, idade = ?, sexo = ?, redes = ?, biografia = ?, img=?, tipoImg=? WHERE email = '$email'";
$stmt = mysqli_prepare($linkDB, $sql);
if (!$stmt) {
    die("Erro ao editar: " . mysqli_error($linkDB));
}
if (!mysqli_stmt_bind_param($stmt, "sisssss", $nome, $idade, $sexo, $redes, $biografia, $conteudo, $tipoImg)) {
    die("Não foi possível vincular parâmetros");
}
// sql para editar a tabela usuários
$sql2 = "UPDATE usuario SET nome = ? WHERE email = '$email'";
$stmt2 = mysqli_prepare($linkDB, $sql2);
if (!$stmt2) {
    die("Erro ao editar: " . mysqli_error($linkDB));
}
if (!mysqli_stmt_bind_param($stmt2, "s", $nome)) {
    die("Não foi possível vincular parâmetros");
}
if (!mysqli_stmt_execute($stmt) || !mysqli_stmt_execute($stmt2)) {
    echo '<script>funcionou("Não foi possível editar");</script>';
    echo '<script>window.location.href = "perfilusuario.php";</script>';
} else {
    echo '<script>window.location.href = "perfilusuario.php";</script>';
}
?>