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
            <h1 style="font-size:25pt; text-align: center;">Enviado com sucesso!</h1><br/>
            <hr>

                <p style="font-size: 15pt; margin: 30px 0;">Avaliaremos o seu perfil profissional e retornaremos o contato assim que obtervos o resultado. 
                Lembrando que essas informações preenchidas são uma pré-avalição. 
                Caso seja selecionado, você participará de uma entrevista presencial.
                Desde já, agradecemos a preferência pela nossa empresa.</p>

                <img src="images/legal.jpg" style="display: block; margin: 0 auto;"/>

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
