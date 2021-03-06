<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<title>Visualização de vídeos</title>
	
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
			<h1 class="titulo"> Visualização de vídeos</h1>
			<div class="divider"></div>
			
			<div class="row">
				<div class="padding-40 col-md-6">
					<a href="img/alston/alston.png" data-lightbox="example-set" data-title="Tela inicial de escolha de vídeos treinamentos.">
						<img class="imagemPrincipal img-responsive" src="img/alston/alston.png" alt=""/>
					</a>

					<div class="padding-10">
						<a href="img/alston/alston3.png" data-lightbox="example-set" data-title="Inserção de código de identificação.">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/alston/alston3.png" alt=""/>
						</a>

						<a href="img/alston/alston4.png" data-lightbox="example-set" data-title="Opção de sair do programa com senha.">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/alston/alston4.png" alt=""/>
						</a>

						<a href="img/alston/alston2.png" data-lightbox="example-set" data-title="Reprodução do vídeo treinamento.">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/alston/alston2.png" alt=""/>
						</a>
						

					</div>
				</div>

				<div class="padding-40 col-md-6">

					<h2 class="text-center">Descrição</h2>
					<h4><i class="fa fa-check"></i> Software desktop para visualização de vídeos treinamentos.</h4>
					<h4><i class="fa fa-check"></i> Desenvolvimento orientado a objetos.</h4>
					<h4><i class="fa fa-check"></i> Projetado para ser utilizado em terminais de autoatendimento.</h4>
					<h4><i class="fa fa-check"></i> Utilização do pluigin do windows media player para a reprodução dos vídeos.</h4>
					<h4><i class="fa fa-check"></i> Controle de acesso aos vídeos por cadastro de usuários.</h4>
					<h4><i class="fa fa-check"></i> Relatório de quantidade de vídeos assistidos.</h4>
					<h4><i class="fa fa-check"></i> Impressão de comprovante no final do vídeo.</h4>
					<h4><i class="fa fa-check"></i> Bloqueio de acesso ao computador e avanço do vídeo.</h4>
					<h4><i class="fa fa-check"></i> Controle com senha de administrador para o fechar do programa.</h4>


					<h2 class="text-center padding-20">Tecnologias Utilizadas</h2>

					<ul class="tecnologias text-center ">
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/csharp.png" alt="C#" title="C#"/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/sqlserver.png" alt="SQL Server" title="SQL Server"/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/media-player.png" alt="Windows Media Player" title="Windows Media Player"/></li>
						
						<a href="https://github.com/marcommas/alstomVideoC-" target="_blank">
							<li><img class="imgTecnologia img-responsive" src="img/tecnologias/github.png" alt="Github" title="Github"/></li>
						</a>
						
						
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