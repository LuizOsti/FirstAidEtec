<?php require("sessao.php"); ?>
<!DOCTYPE html>
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

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="iconesite.png">
    <link rel="stylesheet" type="text/css" href="styledoacao.css">
    <title>FirstAid.com</title>
</head>

<body>

<div class="fotofundo">
    <div class="titulo">

        <div class="titulotexto">
        FIRST AID.COM
        <img class="iconesite" src="iconesite.png" onclick="window.location.href='menu.php'">
        </div>


        <form method="POST" action="pesquisar.php">
        <input type="text" name="pesquisa" value="" placeholder="Pesquisar" class="input-pesquisa"></input>
                <input type="submit" class="input-envia" value="Pesquisar"></input>
            </form>
        <div class="botaoheader">

        <button id="about" class="about" onclick="window.location.href='sobre.php'"><i
        class="bi bi-question-circle"><span>SOBRE</span></i></button>
        <button id="services" class="services" onclick="window.location.href='fac.php'"><i
        class="bi bi-archive"><br><span>FAC</span></i></button>
        <button id="clients" class="clients" onclick="window.location.href='doacao.php'"><i
        class="bi bi-bag-heart"><span>DOAÇÃO</span></i></button>
        <button id="contact" class="contact" onclick="window.location.href='forum.php'"><i
        class="bi bi-chat-dots"><span>FORUM</span></i></button>
        
    </div>
        <button onclick="window.location.href='perfilusuario.php'" class="botaousuario">
        <img src="<?php echo $img_perfil;?>" class="imagemusuario"></img>
        </button>
    </div>

        <div class="container">
            <div class="textopagina">
                <b>DOAÇÕES DE SANGUE:</b>
                <br><br>
                Na triagem de doadores, a Fundação Pró-Sangue obedece a normas nacionais e internacionais. O alto rigor no cumprimento dessas normas visa oferecer segurança e proteção ao receptor e ao doador.

        Abaixo estão listados os requisitos básicos e alguns dos principais impedimentos temporários e definitivos para doação de sangue. No entanto, esta lista não esgota os motivos de impedimentos para doação, de forma que outras informações prestadas por você durante a triagem clínica serão consideradas para definir se está apto para doar sangue nesse momento.<br><br>

        <b>Requisitos básicos:</b>

        <br>» Estar em boas condições de saúde.<br>

        <br>» Ter entre 16 e 69 anos, desde que a primeira doação tenha sido feita até 60 anos (menores de 18 anos, clique para ver documentos necessários e formulário de autorização).<br>

        <br>» Pesar no mínimo 50kg.<br>

        <br>» Estar descansado (ter dormido pelo menos 6 horas nas últimas 24 horas).<br>

        <br>» Estar alimentado (evitar alimentação gordurosa nas 4 horas que antecedem a doação).<br>

        <br> » Apresentar documento original com foto recente, que permita a identificação do candidato, emitido por órgão oficial (Carteira de Identidade física ou cópia autenticada; Carteira de Identidade digital; Cartão de Identidade de Profissional Liberal; Carteira de identificação funcional com foto, filiação, data de nascimento e RG; Carteira de Trabalho e Previdência Social; Carteira Nacional de Habilitação física, com foto e filiação; Carteira Nacional de Habilitação digital, com a presença do QR Code; RNE - Registro Nacional de Estrangeiro; Título de Eleitor Digital, desde que tenha a foto e com o QR Code; Passaporte brasileiro com filiação; e Certificado de Reservista).<br>
              </div>

        </div>
    </div>
    </div>

</div>

</body>

</html>