<!doctype html>
<html lang="pt-br">
<head>

<!--Titulo da página-->
<title>ATC Telecomunicações LTDA.</title>
<!--final título da página-->

<!--Área de meta-->
<meta charset="utf-8">
<meta name = "viewport" content="width=device-width, initial-scale=1"/>
<meta name = "description" content="A ATC Telecomunicações LTDA é uma empresa ágil e referência no setor de telecomunicações. Através de nosso serviço qualificado, proporcionamos os melhores produtos e serviços de alto valor."/>
<meta name = "keywords" content="instalação, tv a cabo, net, backbone, redes, network, o mundo e dos nets, referencia, atc telecom, ATC Telecomunicações LTDA, ATC TELECOMUNICAÇÕES LTDA, projetos, infra-estrutura de rede, servidor"/>
<meta name = "author" content="Daniel Leite da Silva"/>
<!--Final área de meta-->

<!--Icone da página-->
<link rel="icon" href="images/logo-icon.png"/>
<!--Final Ícone da página-->

<!--Folhas de estilo-->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
<!--Fim Folha de estilo-->

<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
    <section id="container">

      <?php require_once("topo.php");?>

      <section class="cadastro" style="background-image: url('images/contatos.jpeg'); background-size: cover;  ">
      </section>
      <section class="content-registro">
          <div class="informacao">
            <br/>
            <h1><i class="fa fa-map-marker"></i>&nbsp&nbsp Localização</h1><br/><br/>
            <a href="index.html">home </a> > <a href="contatos.html">Contatos</a><br/><br/><hr><br/><br/>
            <p><b>Endereço:</b></p><br/>
            <p>Rua gastão da cunha, 620 - Vila Paulista - Jabaquara - São Paulo - SP </p><br/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1512500479852!6m8!1m7!1slTq7a7JtSyjs4dxS8Vm0nA!2m2!1d-23.645650091323!2d-46.66242609018303!3f177.61892986152!4f-5.4624124291832885!5f0.7820865974627469" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.844510539414!2d-46.664685285440555!3d-23.645738884640966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a9a5f7a404f%3A0xdc948574fdc089a!2sATC+Telecomunica%C3%A7%C3%B5es!5e0!3m2!1spt-BR!2sbr!4v1512564372842" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <br/><br/>
            <h1><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbsp Contatos</h1>
            <br/><hr><br/>
            <div class="contato">
                <div class="telephone">
                    <i class="fa fa-phone"></i>&nbsp&nbsp <span>(11) 5564-9222</span>
                </div>
                <div class="whats">
                    <i class="fa fa-whatsapp"></i>&nbsp&nbsp <span>(11) 99189-8230</span>
                </div>
            </div>
            <br/><br/>
            <h1>
              <i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbsp Horários de atendimento
            </h1>
            <br/><hr><br/>
            <div class="contato">
                <div class="hora">
                    <p><b>Dias de atuação:</b></p>
                    <p>Segunda à Sexta-feira.</p><br/>
                    <p><b>Horário:</b></p>
                    <p>07:00 às 16:30.</p>
                </div>
            </div>
          </div>
      </section>

      <section class="slider4" style="background-image: url('images/fundo.jpg'); background-attachment: fixed; background-size: cover;">
        <section class="slider-trans4">
            <h1> - COMPROMETIMENTO - </h1>
            <h3>RESPEITO, DEDICAÇÃO E EMPENHO.</h3>
            <p>Atributos de uma equipe que busca sempre a excelência em seus serviços.
            Juntos, formamos o melhor time, assegurando qualidade e agilidade.</p>
        </section>
      </section>

      <section class="registro">
          <section class="registro-content">
          <h1>Cadastre seu e-mail e receba nossas novidades.</h1>
            <div class="formulario-email">
              <form method="post" action="registro.php"/>
                <input type="text" name="nome" placeholder="Nome Completo" class="info"/>
                <input type="email" name="email" placeholder="Email completo: 'exemplo@exemplo.com.br'" class="info"/>
                <input type="submit" name="botao" class="btn" value="Cadastrar">
              </form>
            </div>
          </section>
      </section>

      <!--Area de rodape do site-->
      <?php require_once("rodape.php");?>
      <!--final de rodape do site-->

  <script type="text/javascript" src="js/cep.js"></script>
  <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="js/carouselScript.js"></script>
</body>
</html>
