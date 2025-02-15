<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="icon" type="image/png" href="iconesite.png">
	<link rel="stylesheet" type="text/css" href="styleforumBKP.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
                alert("A publicação não pode ter mais de 500 caracteres.");
                return false;
            }

            // Se todas as validações passaram, o formulário pode ser enviado
            return true;
        }
        
         
    </script>
<body>
    <div class="fotofundo">

        <div class="titulo">

            <img class="iconesite" src="iconesite.png">
              <!-- Recuperando Imagem php -->
              <?php
              require("functions.php");
              require("dbconnect.php");
              require("sessao.php");

                  $img = RecuperaImagem();
                  $tipoImg = mime_content_type($img[0]);
                  $img_perfil = 'data:' . $tipoImg . ';base64,' . $img;
              ?>
              <!-- Recuperando Imagem php -->

            <button onclick="window.location.href='perfilusuario.php'" class="botaousuario">
            <img src="<?php echo $img_perfil;?>" class="imagemusuario"></img>
            </button>

            <div class="titulotexto">
                FIRST AID.COM
            </div>

            <div class="botaoheader">
                <button id="about" class="about" onclick="window.location.href='sobre.php'"><i
                        class="bi bi-question-circle"><span>SOBRE</span></i></button>
                <button id="services" class="services" onclick="window.location.href='fac.php'"><i
                        class="bi bi-archive"><br><span>FAC</span></i></button>
                <button id="clients" class="clients" onclick="window.location.href='doacao.php'"><i
                        class="bi bi-bag-heart"><span>DOAÇÃO</span></i></button>
                <button id="contact" class="contact" onclick="window.location.href='menu.php'">
                <i class="bi bi-box-arrow-left"><br><span>MENU</span></i></button>

            </div>
        </div>
        
        
        
        
    <div class="container" id="container">
        <div class="area-do-perfil">
            <div class="container-imagem-nome">
                <img src="<?php echo $img_perfil;?>" class="imagem-area-perfil">
                <?php
                $nome = $_SESSION['nome'];
                ?>          
                <span><?php echo "$nome" ?></span>
            </div>
        
        <form enctype="multipart/form-data" name="publitxt" method="POST" action="publicar.php" id="form" onsubmit="return validarFormulario();">
        <textarea name="publicacao" rows="5" cols="50" placeholder="Publicar como <?php echo "$nome";?>" maxlength="500" autofocus style="resize: none"></textarea>
        <input type="submit" name="btn_enviar" value="PUBLICAR">
        </form>
           
        </div>
        <?php
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        $adm = $_SESSION['adm'];
        $verificado = $_SESSION['verificado'];
        
        
        if (!$linkDB) {
            die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
        }
        
        $sql = "SELECT p.id_pergunta, p.pergunta, p.data, p.email,pr.nome, pr.img, pr.tipoImg
            FROM perguntas p
            LEFT JOIN perfil pr ON p.email = pr.email        
            ORDER BY p.data DESC";
     $dataset = mysqli_query($linkDB, $sql);

        if (!$dataset) {
            die("Erro ao executar a consulta: " . mysqli_error($linkDB));
        }

     while ($linha = mysqli_fetch_assoc($dataset)) {
        // Pegar publicação
        $id_pergunta = $linha['id_pergunta'];
        $nome_pergunta = $linha['nome'];
        $pergunta = $linha['pergunta'];
        $data = $linha['data'];
        $email_pergunta = $linha['email'];
        $tipoImg=$linha['tipoImg'];
        $img_perfil = 'data:' . $tipoImg . ';base64,' . $linha['img'];
        // Usar wordwrap para quebrar a linha após 50 caracteres
        $pergunta = wordwrap($pergunta, 100, "<br />\n", true);
        
        $sql_verifica_pergunta = "select verificado, adm from usuario where email ='$email_pergunta'";
        $dataset_verifica_pergunta = mysqli_query($linkDB, $sql_verifica_pergunta);
        while($linha_verifica_pergunta = mysqli_fetch_assoc($dataset_verifica_pergunta)) {
            $verificado_pergunta = $linha_verifica_pergunta['verificado'];
            $adm_pergunta = $linha_verifica_pergunta['adm'];  
        }
        ?>
                
                <div class="nome">
                    <!-- Exibir informações da pergunta -->
                    <img src="<?php echo $img_perfil;?>" style="height: 60px;width: 60px;">
                    <a href="verperfil.php?id=<?php echo "$email_pergunta";?>"><?php echo "$nome_pergunta";?></a>
                    <?php
                    if($verificado_pergunta=="1"){
                        echo "✔";
                    }
                    if($adm_pergunta=="1"){
                        echo "☑";
                    }
                    ?>
                    <br>
                    <span><?php echo $data; ?></span>
                </div>
                
                <div class="container-pergunta" id="publi">
                    <!-- Exibir a pergunta -->
                    <?php echo $pergunta; ?><br>        
                    <?php
                    if ($email == $email_pergunta || $adm == "1") {
                        ?>
                        <form method="POST" action="deletar1.php">
                            <input type="hidden" name="id_pergunta" value="<?php echo $id_pergunta; ?>">
                            <input type="hidden" name="respondida" value="<?php echo $respondida; ?>">
                            <input type="submit" value="Deletar">
                        </form>
                        <?php
                    if ($email == $email_pergunta) {
                        ?>
                        <form method="POST" action="editar1.php">
                            <input type="hidden" name="id_pergunta" value="<?php echo $id_pergunta; ?>">
                            <input type="hidden" name="pergunta" value="<?php echo $pergunta; ?>">
                            <input type="submit" value="Editar">
                        </form>
                        </div>
                        <?php
                    }
                }
                ?>
                    <!-- Formulário para adicionar respostas -->
                    <form method="post" action="resposta1.php" class="form-resposta">
                        <input type="hidden" name="id_pergunta" value="<?php echo $id_pergunta; ?>">
                        <textarea name="resposta" rows="1" cols="50" style="resize: none" placeholder="Resposta:"></textarea>
                        <br><input type="submit" value="Responder">
                    </form>
                    
                    <!-- Exibir respostas -->
                    <?php
                    $sql_respostas ="SELECT resposta, data, email,id_resposta FROM respostas WHERE id_pergunta = $id_pergunta";   
                    $respostas_dataset = mysqli_query($linkDB, $sql_respostas);
            
                    while ($linha_resposta = mysqli_fetch_assoc($respostas_dataset)) {
                        $resposta_texto = $linha_resposta['resposta'];
                        $data_resposta = $linha_resposta['data'];
                        $email_resposta = $linha_resposta['email'];
                        $id_resposta = $linha_resposta['id_resposta'];
                        $resposta_texto = wordwrap($resposta_texto, 100, "\n", true);
                        
                        $sql_imagem="SELECT nome, img, tipoImg FROM perfil WHERE email = '$email_resposta'";
                        $dataset_imagem = mysqli_query($linkDB, $sql_imagem);
                        $linha_imagem=mysqli_fetch_assoc($dataset_imagem);
                        $nome_resposta = $linha_imagem['nome'];
                        $tipoImgResp=$linha_imagem['tipoImg'];
                        $img_resp = 'data:' . $tipoImgResp . ';base64,' . $linha_imagem['img'];
                        
                        $sql_verifica_resposta = "select verificado, adm from usuario where email ='$email_resposta'";
                        $dataset_verifica_resposta = mysqli_query($linkDB, $sql_verifica_resposta);
                        while($linha_verifica_resposta = mysqli_fetch_assoc($dataset_verifica_resposta)) {
                            $verificado_resposta = $linha_verifica_resposta['verificado'];
                            $adm_resposta = $linha_verifica_resposta['adm'];
                        } 
                        
                        ?>
                    <div class="container-resposta">
                            <img src="<?php echo $img_resp;?>" style="height: 30px; width: 30px;">
                            <a href="verperfil.php?id=<?php echo "$email_resposta";?>"><?php echo "$nome_resposta";?>
                        </a>
                        <?php
                            if($verificado_resposta=="1"){
                                echo "     ✔";
                            }
                            if($adm_resposta=="1"){
                                echo "     ☑";
                            }
                            ?>
                            <br>
                            <?php
                            echo '<span>' . $data_resposta . '</span>';
                            echo '<p>' . $resposta_texto . '</p>';
                            
                            if ($email == $email_resposta || $adm == "1") {
                                ?>
                                <form method="post" action="deletar2.php">
                                    <input type="hidden" name="id_pergunta" value="<?php echo $id_pergunta; ?>">
                                    <input type="hidden" name="id_resposta" value="<?php echo $id_resposta; ?>">
                                    <input type="submit" value="Deletar">
                                </form>
                                <?php
                                if ($email == $email_resposta) {
                                    ?>
                                <form method="POST" action="editar2.php">
                                    <input type="hidden" name="id_pergunta" value="<?php echo $id_pergunta; ?>">
                                    <input type="hidden" name="resposta" value="<?php echo $resposta_texto; ?>">
                                    <input type="submit" value="Editar">
                                </form>
                        </div>    
                            <?php
                        }
                        }   
                        
                    } // Fechar o loop while das respostas
                    ?>
                <?php
            } // Fechar o loop while das perguntas
            mysqli_close($linkDB); // Fechar a conexão com o banco de dados
            ?>
   
    </div>
</body>
</html>