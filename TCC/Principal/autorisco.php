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
    <link rel="stylesheet" type="text/css" href="styleautorisco.css">
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
          <b>OQUE FAZER CASOS DE RISCOS NO TRANSITO:</b>
          <br><br />
          Os acidentes de trânsito causam tanto danos financeiros, “Custa caro para a sociedade brasileira pagar os
          prejuízos dos acidentes: estima-se em 10 bilhões de reais, todos os anos”. Como apresentam um risco de vida as
          pessoas envolvidas, portanto, é importante ter a instrução para evitar tais acidentes, e também como
          prosseguir caso aconteçam
          <br>
          <br>
          Você já viu que manter a Calma é a primeira atitude que você deve tomar no caso de um acidente
          de um acidente. Só que cada pessoa reage de forma diferente, e é claro que é muito difícil ter atitudes
          racionais e coerentes na situação: o susto, as perdas materiais, a raiva pelo ocorrido, o pânico no caso de
          vítimas, etc. Tudo colabora para que as nossas reações sejam intempestivas, mal pensadas. Mas tenha cuidado,
          pois ações desesperadas normalmente acabam agravando a situação. Por isso, é fundamental que, antes de agir,
          você recobre rapidamente a sua lucidez, reorganize seus pensamentos e se mantenha calmo.<br><br>

          Quando acontecer um acidente de trânsito próximo a você, lembre-se do que fazer; primeiro de tudo e o mais
          importante é manter a calma, pois assim a ajuda o profissional poderá vir o quanto antes para assim socorrer
          a(s) vitima(s). Caso ninguém no local mantenha a calma, uma vítima pode vir a óbito e pior, causar mais pânico
          e mais envolvidos no acidentee ligar imediatamente para o SAMU (192) ou para o corpo de bombeiros
          (193) ou para a policia militar (190)<br><br>

          Lembrando também que a maioria das dicas dadas na parte de <a href="basico.html">primeiros socorros basicos</a> podem ser e devem ser
          usadas dependendo da situação atual

        </div>
      </div>

    </div>
</body>
</html>