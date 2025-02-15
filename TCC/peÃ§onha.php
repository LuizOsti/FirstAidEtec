<?php
  require("functions.php");
  require("dbconnect.php");
  require("sessao.php");

      $img = RecuperaImagem();
      $tipoImg = mime_content_type($img[0]);
      $img_perfil = 'data:' . $tipoImg . ';base64,' . $img;
  ?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" type="image/png" href="iconesite.png">
  <link rel="stylesheet" type="text/css" href="stylepeconha.css">
  <title>FirstAid.com</title>
</head>

<body>

  <div class="fotofundo">
      <div class="titulo">

        <div class="titulotexto">
          FIRST AID.COM
          <img class="iconesite" src="iconesite.png">
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
        <b>OQUE FAZER EM CASOS DE PICADAS DE ANIMAIS PEÇONHENTOS:</b>
        <br><br>
        levada às pressas para um hospital onde será disponibilizado soro antiofídico e, se possível, levar consigo a
        cobra morta ou viva para identificação. As principais medidas preventivas contra os ataques ofídicos são o uso
        de calçados de proteção, principalmente em locais de trabalho onde haja exposição ao ambiente onde esses
        animais podem ser encontrados, dormir em cama elevada, rede ou usar sempre mosquiteiro adequado.<br><br>

        Tente evitar locais notórios de cobras e fique atento o tempo todo. Algumas práticas são contraindicadas, como o
        uso de
        torniquetes, pois há muitos efeitos colaterais como a dor, isquemia, lesão nervosa e gangrena do membro. Além
        de não ser indicado cortar ou perfurar o local da picada, colocar qualquer substância que possa contaminar a
        ferida ou, ainda, fazer uso de qualquer prática caseira que possa retardar ou prejudicar o atendimento médico.
        <br><br>
        Alguns procedimentos são contraindicados, como o uso de torniquetes, pois há muitos efeitos colaterais como
        dor, isquemia, lesão de nervos e gangrena de extremidades. Além de não ser indicado cortar ou perfurar o local
        da picada, aplicar qualquer substância que possa contaminar a ferida, ou mesmo utilizar qualquer prática
        caseira que possa atrasar ou piorar o atendimento médico
      </div>

       </div>
  </div>
  </div>

  </div>
    
</body>

</html>