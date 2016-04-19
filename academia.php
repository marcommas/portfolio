<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<title>Academia</title>
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/lightbox/lightbox.min.css">

	

	<!--[if lt IE 9]>
	<script src="js/modernizr.min.js" type="text/javascript" ></script>
	<script src="js/html5shiv.min.js" type="text/javascript" ></script>
	<![endif]-->

</head>
<body>
	

	<nav class="navbar header navbar-fixed-top">

		<div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
		    </button>

		    
	    	<a href="index.php" class="nome" >
	    		<img src="img/logo.png" class="img-responsive" style="max-width: 240px;">
	    	</a>
			
		</div>
		<div id="navbar" class="navbar-collapse collapse">
		    <ul class="nav menu navbar-nav navbar-right cl-effect-3 ">

				<li>
					<a href="index.php#sobre"> Sobre</a>
				</li>
				<li>
					<a href="index.php#portfolio"> Portfólio</a>
				</li>
				<li>
					<a href="index.php#contato"> Contato</a>
				</li>
		    </ul>
		</div>

	</nav>

	<!-- Final do Header-->

	<div class="clear"></div>

	


	<section id="portfolio" class="portfolio padding-100">
		<div class="container">
			<h1 class="titulo"> Academia</h1>
			<div class="divider"></div>
			
			<div class="row">
				<div class="padding-40 col-md-6">
					<a href="img/academia/academia3.png" data-lightbox="example-set" data-title="Gerenciamento de exercícios com imagens para que o aluno consiga visualizar o seu exercício.">
						<img class="imagemPrincipal img-responsive" src="img/academia/academia3.png" alt=""/>
					</a>

					<div class="padding-10">
						<a href="img/academia/academia2.png" data-lightbox="example-set" data-title="Cadastro de usuário com foto através de webcam.">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/academia/academia2.png" alt=""/>
						</a>

						<a href="img/academia/academia7.png" data-lightbox="example-set" data-title="Controle de caixa.">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/academia/academia7.png" alt=""/>
						</a>

						<a href="img/academia/academia1.png" data-lightbox="example-set" data-title="Tela inicial do usuário administrador.">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/academia/academia1.png" alt=""/>
						</a>
						
						<!-- Imagens escodidas, somente para a galeria  -->
						<a href="img/academia/academia6.png" data-lightbox="example-set" data-title="Avaliação física com análise postural." style="display: none;"></a>

						<a href="img/academia/academia4.png" data-lightbox="example-set" data-title="Pesquisa de usuários com filtros." style="display: none;"></a>

						<a href="img/academia/academia5.png" data-lightbox="example-set" data-title="Gerenciamento de treinos de determinado aluno." style="display: none;"></a>
					</div>
				</div>

				<div class="padding-40 col-md-6">

					<h2 class="text-center">Descrição</h2>
					<h4><i class="fa fa-check"></i> Software desktop para gerenciamento de academia.</h4>
					<h4><i class="fa fa-check"></i> Desenvolvimento orientado a objetos.</h4>
					<h4><i class="fa fa-check"></i> Controle de pagamento de mensalidades através de web service.</h4>
					<h4><i class="fa fa-check"></i> Backup da base de dados.</h4>
					<h4><i class="fa fa-check"></i> Niveis de acesso de usuários para alunos, professores, financeiro e administradores.</h4>
					<h4><i class="fa fa-check"></i> Impressão de ficha de treino em impressora térmica.</h4>
					<h4><i class="fa fa-check"></i> Integração com leitor biométrico e webcam.</h4>


					<h2 class="text-center padding-20">Tecnologias Utilizadas</h2>

					<ul class="tecnologias text-center ">
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/csharp.png" alt="C#" title="C#"/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/firebird.png" alt="Firebird" title="Firebird"/></li>
						
					</ul>	
				</div>
			</div>
		</div>
	</section>







	<footer id="footer">
		<div class="text-center">
			<a href="https://github.com/marcommas" target="_blank">
				<img src="img/sociais/github.png" class="imgSociais" alt="Github: marcommas" title="Github: marcommas">
			</a>
			
			<a href="https://br.linkedin.com/in/marco-antônio-comassetto-3a80507b" target="_blank">
				<img src="img/sociais/linkedin.png" class="imgSociais" alt="Linkedin: Marco Comassetto" title="Linkedin: Marco Comassetto">
			</a>

			<a href="https://www.facebook.com/marco.comassetto" target="_blank">
				<img src="img/sociais/facebook.png" class="imgSociais" alt="Facebook: Marco Comassetto" title="Facebook: Marco Comassetto">
			</a>	

			
			<img src="img/sociais/skype.png" class="imgSociais" alt="skype: marco.desenvolvimento" title="skype: marco.desenvolvimento">
			

			<a href="mailto:marcommas@gmail.com" >
				<img src="img/sociais/gmail.png" class="imgSociais" alt="Gmail: marcommas@gmail.com" title="Gmail: marcommas@gmail.com">
			</a>		

			<p class="copyright padding-10">© Copyright <?php echo date('Y');?> - Desenvolvido por Marco Comassetto</p>

		</div>
		
	</footer>

	<script src="js/jquery-2.2.2.min.js" type="text/javascript" ></script>
	<script src="js/bootstrap.min.js" type="text/javascript" ></script>

	<script src="js/lightbox/lightbox-plus-jquery.min.js"></script>
	

</body>
</html>