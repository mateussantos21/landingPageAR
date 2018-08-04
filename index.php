<!DOCTYPE html>
<!-- código html para landing page AgroRenda -->
<html>
<head>
	<!--definição de nome e descrição do site (mecanismos de busca)-->
	<title>AgroRenda | Inteligência em Commodities</title>
	<meta name="description" content="Previsão e análise do mercado de Café">

	<!--conjunto de caracteres utilizado-->
	<meta charset="utf-8" />

    <!--chamada do css com bootstrap e jQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

	<!--ferrmentas de Open Graphics (redes sociais)-->
	<meta property="og:title" content="AgroRenda | Inteligência em Commodities">
	<meta property="og:image" content="facebook.jpg">
	<meta property="og:description" content="Previsão e análise do mercado de Café">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Inconsolata|Arvo" rel="stylesheet">
    
</head>
<body>
    <!-- menu fixo -->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#sec1">AgroRenda</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="#sec2">Como Funciona</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#sec3">Produto</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#sec4">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#sec5">Contato</a>
                        </li>
                    </ul>
                        <div class="form-group">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="#sec1">Saiba mais</a></button>
                        </div>
                </div>
        </nav>
    </header>

    <!--primeira seção-->
    <div id="sec1">
        <img src="images/agrorendanegativo.png" alt="Logo Agrorenda" width="350">
        <h1>Inteligência em Commodities</h1>
        <div id="frases"></div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script>
            $(document).ready(function() {

            //textos a serem exibidos
            var textos = ["Previsão de tendências do mercado de Café", "Informação automatizada com inteligência artificial", "Saiba o melhor momento de realizar a venda do seu café"];
        
            //exibição inicial
            var atual = 0;
            $('#frases').text(textos[atual++]);
        
            //define intervalo de troca
            setInterval(function() {
        
                //efeito de desaparecer
                $('#frases').fadeOut(function() {
        
                    //função "callback" que mostra o próximo texto
                    if (atual >= textos.length) atual = 0;
                    $('#frases').text(textos[atual++]).fadeIn();
        
                });
        
            }, 4000);
            });
        </script>
        <!--
        <h2>Previsão de tendências do mercado de Café</h2>
        <h2>Informação automatizada com inteligência artificial</h2>    
        <h2>Saiba o melhor momento de realizar a venda do seu café</h2>
        -->
        <form id="contact-form" method="post" action="contact.php" role="form">
        <div class="messages">
            <div class="controls">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                          <p> </p>      
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="e-mail" required="required" data-error="Favor inserir e-mail válido" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                            <p> </p>      
                      </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Saiba mais">
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

    <!--segunda seção-->
    <div id="sec2">
        <h3><strong>Bem vindo à AgroRenda</strong></h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="icon">
                        <img src="images/icone1.png" alt="computador" width="100">
                        <h5><strong>Online</strong></h5>
                        <p>Cadastre-se online e obtenha informações sobre o melhor momento para negociação do seu café!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="icon">
                        <img src="images/icone2.png" alt="relatorio" width="100">
                        <h5><strong>Tempo Real</strong></h5>
                        <p>Receba relatórios gerados por nosso sistema inteligente para acompanhar o mercado e obter previsões de tendências futuras!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="icon">
                        <img src="images/icone3.png" alt="grafico" width="100">
                        <h5><strong>Inteligente</strong></h5>
                        <p>Os relatórios são gerados por meio de inteligência artificial para auxiliar em sua decisão de venda, garantindo agilidade no processo e aumento de lucratividade!</p>
                    </div>
                </div>
            </div>
        </div>
        <!--<a href="#" class="bnt btn-primary">Saber mais</a> call to action-->
    </div>

    <!--terceira seção-->
    <div id="sec3">
        <h3><strong>O mercado ao seu alcance</strong></h3>
        <h4>Todas as informações a poucos cliques de você!</h4>
        <h4>Relatórios informativos diários pelo canal de comunicação de sua preferência!</h4>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <img src="images/mockpc.png" alt="Funcionamento da plataforma demonstrado em mock-ups" height="300">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <img src="images/mockcell.png" alt="Funcionamento da plataforma demonstrado em mock-ups"  height="300">
                </div>
            </div>
        </div>
        <p> </p>
        <form id="contact-form" method="post" action="contact.php" role="form">
                <div class="messages">
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                  <p> </p>      
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="e-mail" required="required" data-error="Favor inserir e-mail válido" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                    <p> </p>      
                              </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Saiba mais">
                            </div>
                        </div>
                    </div>
        </div>
        </form>
    <p>  </p>
        <!--<a href="#" class="bnt btn-primary">Saber mais</a> call to action-->
    </div>
    
    <!--quarta seção-->
    <div id="sec4">
        <h3><strong>Quem somos</strong></h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="membro">
                        <a href="https://www.linkedin.com/in/jo%C3%A3o-paulo-tavares-46ba18103/" target="_blank"><img src="images/joao.png" alt="João Tavares" width="150"></a>
                        <h5><strong>João Tavares</strong></h5>
                        <h6>Diretor Executivo e de Tecnologia</h6>
                        <p>Engenheiro de Controle e Automação pela Universidade Federal de Lavras (UFLA), mestrando em Engenharia de Sistemas, trabalha há alguns anos com inteligência computacional</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="membro">
                        <a href="https://www.linkedin.com/in/lucasstrazza/" target="_blank"><img src="images/lucas.png" alt="Lucas Strazza" width="150"></a>
                        <h5><strong>Lucas Strazza</strong></h5>
                        <h6>Diretor Operacional e Comercial</h6>
                        <p>Estudante de Sistemas de Informação na UFLA, experiência empreendedora com sua própria empresa de eventos. Finalista do programa de aceleração de startups Lemonade09</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="membro">
                        <a href="https://www.linkedin.com/in/luiz-gonzaga-de-castro-junior-5a7727b9/" target="_blank"><img src="images/gonzaga.png" alt="Luiz Gonzaga" width="150"></a>
                        <h5><strong>Luiz Gonzaga</strong></h5>
                        <h6>Consultor de Inteligência de Negócios</h6>
                        <p>Professor da UFLA, uma das maiores autoridades no desenvolvimento de tecnologias para o agronegócio do Brasil, possui mais de 20 anos trabalhando no mercado agrícola</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="membro">
                        <a href="https://www.linkedin.com/in/mateusrsantos/" target="_blank"><img src="images/mateus.png" alt="Mateus Santos" width="150"></a>
                        <h5><strong>Mateus Santos</strong></h5>
                        <h6>Diretor de Marketing e Produto</h6>
                        <p>Estudante de Engenharia de Controle e Automação na UFLA, experiência com pesquisa e desenvolvimento nas áreas de tecnologia robótica, otimização e inteligência artificial, gestor de projetos de extensão universitários</p>
                    </div>
                </div>
            </div>
        </div>
        <h3><strong>Parceiros</strong></h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="parceiro">
                        <a href="http://www.inovacafe.ufla.br/" target="_blank"><img src="images/inovacafe.png" alt="Logo InovaCafé" width="300"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="parceiro">
                        <a href="http://www.icafebr.com.br/" target="_blank"><img src="images/cim.png" alt="Logo CIM" width="300"></a>
                    </div>
                </div>
            </div>
        </div>
        <form id="contact-form" method="post" action="contact.php" role="form">
            <div class="messages">
                <div class="controls">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                                <p> </p>      
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="e-mail" required="required" data-error="Favor inserir e-mail válido" >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                                <p> </p>      
                            </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" value="Saiba mais">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <p>  </p>
    </div>

    <!--quinta seção-->
    <div id="sec5">
        <img src="images/agrorendanegativo.png" alt="Logo agrorendanegativo" width="300">
        <h1>Inteligência em Commodities</h1> 
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="contato">
                        <img src="images/tel.png" alt="Telefone" width="30"><h6>(35) 99853 5388</h6>    
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="contato">
                        <img src="images/email.png" alt="E-mail" width="30"><h6>agrorenda@agrorenda.com</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="contato">
                        <img src="images/localizacao.png" alt="endereço" width="30"><h6>Agência de Inovação do Café - Campus da UFLA - Lavras - Minas Gerais</h6>    
                    </div>
                </div>
            </div>
        </div>
    <p>Designed by ©AgroRenda</p>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>
</body>
</html>