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
		<link rel="stylesheet" type="text/css" href="stylealergia.css">
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
          <b>OQUE FAZER EM CASOS DE ALERGIA:</b>
          <br><br />
          A alergia alimentar é uma reação de saúde adversa que ocorre quando o
          sistema imunológico reconhece erradamente um alimento como uma entidade
          agressora ao organismo. A fração desse alimento que é responsável pela
          reação alérgica denomina-se alergénio. Pensa-se que pelo menos 5 em cada
          100 crianças sofram de alergia alimentar, e que nos adultos a
          prevalência seja mais baixa, entre 3 a 4%.<br /><br />
  
          <b>COMO SE MANISFESTA CLINICAMENTE A ALERGIA ALIMENTAR?:</b><br />
          As manifestações clínicas da reação alérgica podem variar de moderadas a
          graves, podendo mesmo, em alguns casos, ser fatais. Os sintomas surgem
          rapidamente, entre alguns minutos até duas horas após a ingestão do
          alérgeno, e podem incluir manifestações cutâneas (pele e mucosas),
          respiratórias, gastrointestinais e cardiovasculares, de forma isolada ou
          combinada<br /><br />
  
          <b>O QUE FAZER CASOS DE INGESTÃO ACEIDENTAL OU APARECIMENTO DE SINTOMAS?:</b><br />
          É vital o reconhecimento dos sinais e sintomas associados à anafilaxia
          bem como a familiarização com o procedimento necessário em caso de
          ingestão acidental. Indivíduos com alergia alimentar devem encontrar-se
          devidamente identificados e fazer-se acompanhar de um kit de adrenalina,
          na dose de adulto ou de criança conforme indicado (dispositivo auto
          injetor de adrenalina intramuscular - por exemplo Anapen®) e medicação
          anti-histamínica. Perante uma situação de ingestão acidental, deve ser
          imediatamente administrada a adrenalina através do auto injetor,
          mantendo o dispositivo na zona de aplicação durante 10 segundos e
          massajeando posteriormente a mesma zona. Os serviços de emergência devem
          ser chamados de imediato ao local de forma a garantir a assistência
          médica necessária.<br /><br />
  
          <b>CONTAMINAÇÃO CRUZADA:</b><br />
          Em alguns casos quantidades muito reduzidas de alergênico podem ser
          suficientes para provocar uma reação grave. Muitas vezes um alimento que
          parecia ser seguro pode desencadear uma reação alérgica, apenas por ter
          entrado em contato com outros alimentos que têm o alergênico. A este
          fenómeno designa-se contaminação cruzada, podendo em alguns casos ter
          consequências graves. Existem pequenos cuidados e medidas simples na
          preparação e produção de alimentos e refeições, que podem prevenir a
          contaminação cruzada e que permitem garantir a ingestão de alimentos
          seguros:<br />
          Lavar corretamente as mãos entre as várias etapas de manipulação de
          alimentos. Não usar os mesmos utensílios durante a preparação,
          confecção, empratamento e distribuição de refeições (talheres,
          misturadoras, batedeiras, tábuas de corte, pratos, travessas, tachos e
          panelas e outros); Não utilizar o mesmo óleo de fritura ou água de
          cozedura para diferentes alimentos; Não utilizar as mesmas bancadas ou
          superfícies de contacto para a manipulação de alimentos; Durante as
          refeições, os doentes com alergia alimentar devem evitar a partilha de
          utensílios (talheres, pratos, guardanapos, copos) ou contacto direto com
          alimentos potencialmente alergênicos.

          
        </div>
      </div>
    </div>

    </div>
</body>
</html>

 