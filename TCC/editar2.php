<?php require("sessao.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publicar</title>
    <script>
        function validarFormulario() {
            var publicacao = document.forms["publitxt"]["publicacao"].value;

            // Validar se o campo de publicação está vazio
            if (publicacao.trim() === "") {
                alert("O campo de publicação não pode estar vazio.");
                return false;
            }

            // Validar se a publicação excede 150 caracteres
            if (publicacao.length > 500) {
                alert("A resposta não pode ter mais de 500 caracteres.");
                return false;
            }

            // Se todas as validações passaram, o formulário pode ser enviado
            return true;
        }
</script>
</head>
<body>
    <?php
    require("sessao.php");
    $email = $_SESSION['email'];
    $nome = $_SESSION['nome'];
    $resposta= $_POST['resposta'];
    $id_pergunta= $_POST['id_pergunta'];
    require("dbconnect.php");
    ?>
    <form enctype="multipart/form-data" name="publitxt" method="POST" action="editar2-2.php" id="form" onsubmit="return validarFormulario();">
        <textarea name="publicacao" rows="10" cols="50"  maxlength="500" autofocus style="resize: none"><?php echo $resposta; ?></textarea>
        <br>
        <input type="hidden" name="id_pergunta" value="<?php echo $id_pergunta; ?>">
        <input type="submit" name="btn_enviar" value="Editar✎">
    </form>
        <button onclick="window.location.href='forum.php'">Cancelar</button>
</body>
</html>