<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<title>Marco Comassetto</title>
	
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
	

	<nav class="navbar header    navbar-fixed-top">

		<div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
		    </button>

		    
	    	<a href="#" class="nome" >
	    		<h2 class="nome"><span style="font-size: 40px;">M</span>arco <span style="font-size: 40px;">C</span>omassetto</h2>
	    		<h5 class="nomeComplemento" >Desenvolvedor de Software</h5>
	    	</a>
			
		</div>
		<div id="navbar" class="navbar-collapse collapse">
		    <ul class="nav menu navbar-nav navbar-right ">

				<li>
					<a href="index.php#sobre"><i class="fa fa-3x fa-user"></i> SOBRE</a>
				</li>
				<li>
					<a href="index.php#portfolio"><i class="fa fa-3x fa-desktop"></i> PORTFÓLIO</a>
				</li>
				<li>
					<a href="index.php#contato"><i class="fa fa-3x fa-envelope-o"></i> CONTATO</a>
				</li>
		    </ul>
		</div>

	</nav>

	<!-- Final do Header-->

	<div class="clear"></div>

	


	<section id="portfolio" class="portfolio padding-100">
		<div class="container">
			<h1 class="titulo"> Gerenciamento de Enquetes</h1>
			<div class="divider"></div>
			
			<div class="row">
				<div class="padding-40 col-md-6">
					<a href="img/gtQuest/quest1.png" data-lightbox="example-set" data-title="Titulo">
						<img class="imagemPrincipal img-responsive" src="img/gtQuest/quest1.png" alt=""/>
					</a>

					<div class="padding-10">
						<a href="img/gtQuest/quest2.png" data-lightbox="example-set" data-title="Titulo">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/gtQuest/quest2.png" alt=""/>
						</a>

						<a href="img/gtQuest/quest3.png" data-lightbox="example-set" data-title="Titulo">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/gtQuest/quest3.png" alt=""/>
						</a>

						<a href="img/gtQuest/quest4.png" data-lightbox="example-set" data-title="Titulo">
							<img class="imagemSecundaria col-md-4 img-responsive" src="img/gtQuest/quest4.png" alt=""/>
						</a>
					</div>
				</div>

				<div class="padding-40 col-md-6">

					<h2 class="text-center">Descrição</h2>
					<h4><i class="fa fa-check"></i> Ferrementa web de pesquisas e enquetes.</h4>
					<h4><i class="fa fa-check"></i> Respostas das enquetes através de terminais de autoatendimento.</h4>
					<h4><i class="fa fa-check"></i> Painel administrativo para cadastro de usuários e questionários.</h4>
					<h4><i class="fa fa-check"></i> Relatórios em tempo real através de gráficos ou em planilha excel.</h4>
					<h4><i class="fa fa-check"></i> Importação de usuários através de planilha excel</h4>
					<h4><i class="fa fa-check"></i> Configurações especiais através do painel administrativo como: logotipo, imagem inicial, cor da enquete, e mensagem final.</h4>

					<h2 class="text-center padding-20">Tecnologias Utilizadas</h2>

					<ul class="tecnologias text-center ">
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/html5.png" alt="HTML5"/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/css3.png" alt=""/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/js.png" alt=""/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/php.png" alt=""/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/bootstrap.png" alt=""/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/ajax.png" alt=""/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/mysql.png" alt=""/></li>
						<li><img class="imgTecnologia img-responsive" src="img/tecnologias/google-charts.png" alt=""/></li>

					</ul>
					
					
					
				</div>
			</div>

			
			
		</div>
	</section>






	<section class="copyright text-center ">

		<a href="https://github.com/marcommas" target="_blank">
			<img src="img/sociais/github.png" class="imgSociais" alt="Github: marcommas">
		</a>
		
		<a href="https://br.linkedin.com/in/marco-antônio-comassetto-3a80507b" target="_blank">
			<img src="img/sociais/linkedin.png" class="imgSociais" alt="Linkedin: Marco Comassetto">
		</a>

		<a href="https://www.facebook.com/marco.comassetto" target="_blank">
			<img src="img/sociais/facebook.png" class="imgSociais" alt="Facebook: Marco Comassetto">
		</a>	

		
		<img src="img/sociais/skype.png" class="imgSociais" alt="skype: marco.desenvolvimento">
		

		<a href="mailto:marcommas@gmail.com" >
			<img src="img/sociais/gmail.png" class="imgSociais" alt="Gmail: marcommas@gmail.com">
		</a>	

		<p class="copyright padding-20">© Copyright <?php echo date('Y');?> - Desenvolvido por Marco Comassetto</p>
	</section>

	<script src="js/jquery-2.2.2.min.js" type="text/javascript" ></script>
	<script src="js/bootstrap.min.js" type="text/javascript" ></script>
	<script src="js/lightbox/lightbox-plus-jquery.min.js"></script>
	
</body>
</html>