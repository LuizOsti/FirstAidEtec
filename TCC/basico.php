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
  <link rel="stylesheet" type="text/css" href="stylebasico.css">
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

        <br><br />
        De acordo com a Federação Internacional das Sociedades da Cruz Vermelha e
        do Crescente Vermelho, define-se os primeiros socorros como a prestação e
        assistência médica imediata a uma pessoa ou uma ferida até à chegada de
        ajuda profissional.<br /><br /><br />

        TORNIQUETES:<br /><br />
        • Deve ser antes da vitima entrar em choque, uma vez que sua eficácia é
        reduzida após o choque;<br /><br />
        • Deve ser exclusivamente nos membros, o mais alto possível no membro,
        logo abaixo da junta;<br /><br />
        • Deve impedir completamente o fluxo arterial, pois a oclusão apenas do
        sistema venoso pode aumentar a hemorragia e resultar em uma extremidade
        edemaciada e cianótica. <br /><br />
        • Não deve ser aplicado nas juntas, uma vez que não conseguira aplicar
        pressão suficiente para ocluir completamente o fluxo arterial;<br /><br />
        • Não deve ser aplicado na tíbia, "canela", nem logo acima do joelho pois
        essas regiões não permitem que um torniquete funcione corretamente;<br /><br />
        • Caso o primeiro torniquete não surja efeito, um segundo pode ser
        aplicado próximo ao primeiro, respeitando as outras regras de
        aplicação;<br /><br />
        • Não deve ser aplicado sobre objetos como relógios, pulseiras, ou
        qualquer material sobre o membro;<br /><br />
        • É preferível o uso de torniquetes comerciais, pois são projetados
        cientificamente, testados em laboratório e validados clinicamente, utilize
        torniquetes improvisados apenas se os comerciais não estiverem
        disponíveis;<br /><br />
        • O monitoramento do torniquete aplicado é de elevada importância, tendo
        em vista que, com uso prolongado, haverá a cessação do fluxo sanguíneo
        para a área abaixo da lesão, o que poderá resultar na redução da
        circunferência do membro, com levando ao afrouxamento do dispositivo e
        possível retorno da hemorragia;<br /><br />
        • Quando a situação e o tempo permitirem, a verificação do pulso distal
        deve ser realizada nos membros em que houver um torniquete aplicado. Se o
        pulso distal ainda estiver presente, então a pressão do torniquete deve
        ser aumentada, ou, caso haja o risco de lesão, um segundo torniquete deve
        ser aplicado, lado a lado e acima do primeiro, a fim de eliminar o pulso
        distal.<br /><br />
        • A educação, treinamento e doutrina quanto ao uso de torniquetes é
        primordial para que sua aplicação seja bem-sucedida.<br /><br /><br />

        MANOBRA DE HEIMLICH:<br /><br />
        Em caso de engasgamento em adultos, pode se usar a manobra de Heimlich. Em
        adultos é necessário envolver seus braços entre a caixa torácica e o
        umbigo da vítima;<br />
        fechar bem as mãos com o polegar de fora;<br />
        segurar o punho com a outra mão e pressionar a região com firmeza para
        dentro e para cima. Após esse processo, avaliar se a vítima voltou a
        respirar normalmente;<br />
        caso ainda esteja engasgada, poderá repetir a manobra. Se o caso de
        engasgamento for com um bebê, a manobra será diferente. Deve-se apoiar o
        bebê no braço, com a cabeça inclinada para baixo mantendo a boca do bebê
        aberta;<br />
        executar então cinco batidas com a palma da mão nas costas entre as
        escápulas do bebê. Após esse processo, deverá virar o bebê de barriga para
        cima, mantendo a posição inclinada e a boca aberta, para iniciar cinco
        compressões no peito entre os mamilos<br /><br />

        CONTENÇÃO DE HEMORRAGIAS:<br /><br />
        As recomendações para a contenção de uma hemorragia exsanguinante devem
        ser adaptadas aos diferentes sistemas de atendimento pré-hospitalar,
        especialmente considerando de interesse o treinamento na aplicação do
        torniquete, curativos hemostáticos, bandagens de compressão e demais
        dispositivos disponíveis no momento, de acordo com a demanda da hemorragia
        local. Um dos principais pontos prioritários observados, hoje em dia, é o
        desenvolvimento de estratégias de treinamento para socorristas,
        profissionais de saúde e leigos, envolvidos neste tipo de incidente para
        melhorar o índice de sobrevivência das vítimas Um torniquete improvisado
        adequadamente construído pode ser altamente eficaz, desde que o usuário
        siga certos princípios<br />
        <br />

        OQUE FAZER EM CASO DE DESMAIO:<br /><br />
        Avalie o estado da criança e verifique se está respirando. Se não estiver,
        faça manobras de RCP Fique tranquilo e afaste curiosos; Coloque a criança
        deitada de costas, pernas elevadas, afrouxe as roupas; Não jogue água na
        vítima; Não esfregue pulsos com álcool; Não ofereca álcool ou amoníaco
        para cheirar Não sacuda a criança Não tente dar água ou outros líquidos
        enquanto está inconsciente Não coloque sal na boca Não tente acordar com
        tapas Situação especial: hipoglicemia ATENCAO: se a criança for diabética
        e apresentar malestar, palidez, suor frio, confusão mental, mesmo sem
        desmaio, ela pode estar manifestando um quadro de hipoglicemia (queda dos
        níveis de açúcar do sangue), e deve ser imediatamente encaminhada para o
        pronto socorro ou acionar o samu 192. O que não fazer?<br /><br />

        OQUE FAZER EM CASOS DE QUEIMADURA:<br /><br />
        Queimadura por chama (incêndio)<br />
        Sinais de gravidade: queimadura de face, tosse, dificuldade de respirar.
        Role a criança no chão para apagar o fogo do corpo (ou bata com toalha)
        Abaixem-se por baixo da fumaça, para respirar o menos possível Procure
        atendimento médico,<br /><br />queimadura por choque:<br />
        Desligue a rede elétrica; Afaste a criança com um material isolante (cebo
        de vassoura de madeira, tapete de borracha). Não utilize metal ou encoste
        na criança pois você pode acabar sendo eletrocutado também; Providencie
        atendimento médico; Atenção: Verifique se a criança está respirando e com
        o coração batendo, Choque pode levar a uma parada cardiorrespiratória.
        Caso isso ocorra, realize RCP enquanto aguarda ajuda.<br /><br />

        Queimadura química:<br>Ligue para o Centro de Informações Toxicológicas;
        Lave a face e a boca com água corrente; Mantenha a criança em jejum (não
        induza vomitos)batendo, Choque pode levar a uma parada cardiorespiratória.
        Não use gelo Não fure as bolhas, se existirem. Não use substâncias
        estranhas; Pasta de dente, clara de ovo, café manteiga ou coisas do tipo não devem ser
        utilizados.
      </div>
    </div>
  </div>
  </div>

  </div>
</body>
</html>