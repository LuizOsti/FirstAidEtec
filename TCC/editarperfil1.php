<?php require("sessao.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="iconesite.png">
    <link rel="stylesheet" type="text/css" href="editarperfil1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Perfil</title>
    <script>
    function validarFormulario() {
        var nome = document.forms["publitxt"]["nome"].value;
        var idadeInput = document.forms["publitxt"]["idade"];
        var idade = idadeInput.value;

        // Validar se o campo de publicação está vazio
        if (nome.trim() === "") {
            alert("O campo nome não pode estar vazio.");
            return false;
        }

        if (idade.trim() === "") {
            alert("O campo idade não pode estar vazio.");
            return false;
        }

        // Verificar se idade contém apenas números
        if (!/^\d+$/.test(idade)) {
            alert("O campo idade deve conter apenas números.");
            return false;
        }

        // Converter idade para número
        idade = parseInt(idade);

        // Verificar se idade é um número inteiro
        if (isNaN(idade) || idade % 1 !== 0) {
            alert("O campo idade precisa ser um número inteiro.");
            return false;
        }

        return true;
    }

    // Adicionar um evento de validação para permitir apenas números no campo idade
    var idadeInput = document.forms["publitxt"]["idade"];
    idadeInput.addEventListener("input", function () {
        this.value = this.value.replace(/\D/g, ""); // Remove caracteres não numéricos
    });
</script>
</head>
<body>
    <div class="fotofundo">
        <div class="titulo">

            <img class="iconesite" src="iconesite.png">

            <button onclick="window.location.href='perfilusuario.php'" class="botaousuario">
		    <img src="<?php echo $img_perfil;?>" class="imagemusuario"></img>
		    </button>

            <div class="titulotexto">
                FIRST AID.COM
            </div>
            
            <div class="botaoheader">
                <button id="about" class="about" onclick="window.location.href='sobre.html'"><i
                        class="bi bi-question-circle"><span>SOBRE</span></i></button>
                <button id="services" class="services" onclick="window.location.href='fac.html'"><i
                        class="bi bi-archive"><br><span>FAC</span></i></button>
                <button id="clients" class="clients" onclick="window.location.href='doacao.html'"><i
                        class="bi bi-bag-heart"><span>DOAÇÃO</span></i></button>
                <button id="contact" class="contact" onclick="window.location.href='forum.php'"><i
                        class="bi bi-chat-dots"><span>FORUM</span></i></button>

            </div>
        </div>

        <div class="container">
        <?php
            require("sessao.php");
            require("dbconnect.php");
            $email = $_SESSION['email'];
            
            $sql_perfil="select nome,idade,sexo,redes,biografia,img,tipoImg from perfil where email='$email'";
            $dataset1=mysqli_query($linkDB,$sql_perfil);
            
            if (!$dataset1) {
                die("Erro ao buscar informações do perfil: " . mysqli_error($linkDB));
            }
            while ($linha = mysqli_fetch_assoc($dataset1)) {
                $nome= $linha['nome'];
                $biografia = $linha['biografia'];
                $idade = $linha['idade'];
                $sexo = $linha['sexo'];
                $redes = $linha['redes'];
                $tipoImg = $linha['tipoImg'];
                $img = 'data:' . $tipoImg . ';base64,' . $linha['img'];
            }
            ?>

        
            <!-- Exibir a imagem atual -->
            
            
            <form enctype="multipart/form-data" name="publitxt" method="POST" action="editarperfil2.php" id="form" onsubmit="return validarFormulario();">
                Nome:
                <textarea name="nome" rows="2" cols="50"  maxlength="100" autofocus style="resize: none"><?php echo $nome; ?></textarea>
                <br>
                Idade:
                <textarea name="idade" rows="1" cols="50"  maxlength="3" autofocus style="resize: none"><?php echo $idade; ?></textarea>
                <br>
                Sexo:
                <textarea name="sexo" rows="2" cols="50"  maxlength="50" autofocus style="resize: none"><?php echo $sexo; ?></textarea>
                <br>
                Redes:
                <textarea name="redes" rows="5" cols="50"  maxlength="100" autofocus style="resize: none"><?php echo $redes; ?></textarea>
                <br>
                Biografia:
                <textarea name="biografia" rows="10" cols="50"  maxlength="300" autofocus style="resize: none"><?php echo $biografia; ?></textarea>
                <br>
                <br>
                
                <?php
                if (!empty($img)) {
                    echo "Imagem Atual:<br> ";
                    echo '<img src="'.$img.'" alt="Imagem Atual" width="100">';
                }
                ?>
                
                    <!-- Campo de upload de imagem -->
                <label for="imagem" class="custom-file-upload">Selecione uma imagem</label>
                <input type="file" name="imagem" id="imagem" style="display:none;"></input>
                
                
                <input type="submit" class="inputenviar" name="btn_enviar" value="Editar✎"></input>
                <button onclick="window.location.href='perfilusuario.php'">Cancelar</button>
            </form>
            
        </div>
    </div>
</body>
</html>