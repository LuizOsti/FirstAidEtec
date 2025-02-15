<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <script>
        function exibirErro(mensagem) {
            alert(mensagem);
            window.location.href = "index.html";
        }
    </script>
</head>
<body>
<?php
$email = $_POST['email'];
$email = strtolower($email);
$senha = $_POST['senha'];

// Verifique se os campos foram preenchidos
if (empty($email) || empty($senha)) {
    echo '<script>exibirErro("Por favor, preencha todos os campos.");</script>';
} else {
    require("dbconnect.php");
    require("sessao.php");
    require("criptografia.php");
    $sql = "select nome, senha, verificado, adm from usuario where email = ?";
    $stmt = mysqli_prepare($linkDB, $sql);

    if (!$stmt) {
        echo '<script>exibirErro("Erro ao preparar consulta.");</script>';
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);

        if (!mysqli_stmt_execute($stmt)) {
            echo '<script>exibirErro("Não foi possível executar a consulta.");</script>';
        } else {
            mysqli_stmt_bind_result($stmt, $nome, $senhaBD, $verificado, $adm);
            if (!mysqli_stmt_fetch($stmt)) {
                echo '<script>exibirErro("Usuário não localizado.");</script>';
            } else {
                mysqli_stmt_close($stmt); // Fechar o resultado da primeira consulta

                $sql2 = "select img, tipoImg from perfil where email = ?";
                $stmt2 = mysqli_prepare($linkDB, $sql2);
                mysqli_stmt_bind_param($stmt2, "s", $email);

                if (!$stmt2) {
                    echo '<script>exibirErro("Erro ao preparar consulta 2.");</script>';
                } else {
                    if (!mysqli_stmt_execute($stmt2)) {
                        echo '<script>exibirErro("Não foi possível executar a consulta 2.");</script>';
                    } else {
                        mysqli_stmt_bind_result($stmt2, $img1, $tipoImg);
                        $img = 'data:' . $tipoImg . ';base64,' . $img1;

                        if (ChecaSenha($senha, $senhaBD)) {
                            $_SESSION['id'] = session_id();
                            $_SESSION['nome'] = $nome;
                            $_SESSION['senha'] = $senhaBD;
                            $_SESSION['email'] = $email;
                            $_SESSION['verificado'] = $verificado;
                            $_SESSION['adm'] = $adm;
                            $_SESSION['img'] = $img;
                            $_SESSION['tipoImg'] = $tipoImg;

                            echo '<script>window.location.href = "menu.php";</script>';
                        } else {
                            echo '<script>exibirErro("Usuário/Senha não localizado");</script>';
                        }
                    }
                }
            }
        }
    }
}
?>
</body>
</html>