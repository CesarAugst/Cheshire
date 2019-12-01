<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['log'] != 'ativo') {
	session_destroy();
	header("location: pagLogin.php");
}
?>
<html lang="pt-BR" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="../../img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Inicio</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="../../csspg/linearicons.css">
	<link rel="stylesheet" href="../../csspg/font-awesome.min.css">
	<link rel="stylesheet" href="../../csspg/bootstrap.css">
	<link rel="stylesheet" href="../../csspg/magnific-popup.css">
	<link rel="stylesheet" href="../../csspg/jquery-ui.css">
	<link rel="stylesheet" href="../../csspg/nice-select.css">
	<link rel="stylesheet" href="../../csspg/animate.min.css">
	<link rel="stylesheet" href="../../csspg/owl.carousel.css">
	<link rel="stylesheet" href="../../csspg/jquery-ui.css">
	<link rel="stylesheet" href="../../csspg/main.css">
	<link rel="stylesheet" type="text/css" href="meuCss/estiloso.css">
</head>

<body>
	<!-- Cabeçalho -->
	<header id="header">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="tel:+9530123654896"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+55 11 4148-2099</span></span></a>
						<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">faleconosco@etecdecotia.com.br</span></span></a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<?php
						echo "Olá, <b>" . $_SESSION['nome'] . " </b>";
						?>
						<a href="../BACK/logout.php" class="primary-btn text-uppercase ml-5">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="pagInicio.php"><img src="../../img/cheshire1.png" width="130px" height="100px" alt="" title="" /></a>
					<img src="../../img/cps50a.png" height="90px" width="200px">
					<img src="../../img/eteccotia.png" height="90px" width="200px">
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-has-children"><a href="">Transtornos</a>
							<ul>
								<li><a href="pagTranstornoEmocional.php">Emocionais</a></li>
								<li><a href="pagTranstornoAlimentar.php">Alimentares</a></li>
							</ul>
						</li>
						<li><a href="pagDefasagem.php">Defasagem</a></li>
						<li><a href="pagDesmotivação.php">Desmotivação</a></li>
						<li><a href="pagProblemasFamiliares">Problemas familiares</a></li>
						<li><a href="pagContato.php">Contato</a></li>
						<li><a href="perfil">Perfil</a></li>
						<li class="menu-has-children"><a href="">Mensagens</a>
							<ul>
								<li><a href="pagCaixaMsg.php">Mensagens recebidas</a></li>
								<li><a href="pagEnviar.php">Enviar mensagem</a></li>
								<li><a href="pagMsgLida.php">Mensagens lidas</a></li>
								<li><a href="pagCaixaMsgEnv.php">Mensagens enviadas</a></li>
							</ul>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- Fim do cabeçalho -->

	<!-- Banner Area -->
	<section class=" relative mensagem-banner " id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content blog-header-content col-lg-12">
					<h1 class="text-white">
						Menu de mensagens
					</h1>

				</div>
			</div>
		</div>
	</section>

	<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
		<div class="container text-center">
			<div class="col-md-12">
				<br><br>
				<h1>Bem vindo ao sistema</h1><br><br>
				<a class="primary-btn btn-block mb-2" href="pagCaixaMsg" title="Visualizar mensagens recebidas">Mensagens recebidas</a><br>
				<a class="primary-btn btn-block mb-2" href="pagEnviar.php">Enviar mensagem</a><br>
				<a class="primary-btn btn-block mb-2" href="pagMsgLida.php">Visualizar mensagens lidas</a><br>
				<a class="primary-btn btn-block mb-2" href="pagCaixaMsgEnv.php">Visualizar mensagens enviadas</a><br>
				<!-- <a class="primary-btn btn-block mb-2 btn-danger" href="pagInicio.php">Sair do menu de mensagens</a><br> -->
			</div>
		</div>
	</div>


	<!-- Fim banner Area -->

	<!-- Menu de páginas -->

	<!--<br><br>
	<center>
		<h1>Problemas na aprendizagem:</h1>
	</center>


	<section class="top-category-widget-area pt-90 pb-90 ">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="pagDefasagem.php"> -->


	<!--target="_blank"> para abrir em outra guia-->


	<!--<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="../../img/defasagem.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase"> Defasagem</h4>
									<span></span>
									<p>Artigo sobre a defasagem escolar</p>
								</div>
							</a>
						</div>
					</div>

				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="pagDesmotivação.php">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="../../img/desmotivação.jpeg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Desmotivação</h4>
									<span></span>
									<p>Artigo sobre a desmotivação escolar</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="pagProblemasFamiliares.php" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="../../img/Problemas.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Problemas Familiares</h4>
									<span></span>
									<p>Artigo sobre problemas familiares</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->


	<!-- fim menu -->

	<!-- Start post-content Area -->


	<!--<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">


						</div>
						<div class="col-lg-9 col-md-9 ">
							<div class="feature-img">

							</div>
							<a class="posts-title" href="pagBlog-single.html">
								<h2>Introdução à aplicação</h2>
							</a><br>
							<p class="excert" align=justify>
								Este projeto tem como base uma otimização na interação entre os orientadores educacionais com os alunos que possuem problemas educacionais. O objetivo é criar uma ferramenta que aproxime o aluno aos profissionais responsáveis por lhe orientar. Para tanto, estudos sobre o desenvolvimento de problemas educacionais em estudantes e formas de auxílio a indivíduos tais transtornos serão realizados a fim de incorporar características de métodos de intervenção e apoio mais eficazes a funcionalidades da aplicação, tomando como base as atribuições ao cargo de orientadores educacionais no ambiente ETEC. Primeiramente entende-se que o pouco período de tempo que os alunos passam no ambiente escolar, não é possível auxilia-los por completo em questão de sua atividade escolar para com seu desempenho acadêmico, em certos casos o aluno esconde sua dificuldade, dificultando o trabalho dos orientadores, onde por vezes o aluno omite o problema até mesmo de sua família, que ao passar do tempo acaba agravando a situação, em casos avançados, após a divulgação de menções semestrais, o aluno acaba se desmotivando, aumentando assim os casos de evasão escolar. Visto a necessidade da implementação de meios que facilitem a comunicação entre o estudante com dificuldades educacionais e os orientadores que possam lhe indicar meios para solucionar seus conflitos ou mesmo contatos de profissionais que lhe ofereçam os devidos tratamentos é o foco desse projeto, visando servir de ferramenta de uso no ambiente escolar, auxiliando funcionários que orientam os alunos emocionalmente, a agirem de forma mais eficaz, uma vez que não dependeriam unicamente da iniciativa do aluno, contando também com a ajuda de seus colegas e sua família para relatar situações problemas que acarretam em situações conflitantes ao ensino dos alunos e indica-lo para atendimento adequado.
							</p>

						</div>
					</div>





				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">

						<div class="single-sidebar-widget user-info-widget">
							<img src="../../img/cheshire1.png" height="100" width="150" alt="">
							<a href="#">
								<h4>Projeto Cheshire</h4>
							</a>
							<p>
								Aplicação web
							</p>
							<ul class="social-links">
								<li><a href="https://www.facebook.com/etecdecotia/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/etecdecotia" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://github.com/CesarAugst/Cheshire" target="_blank"><i class="fa fa-github"></i></a></li>
							</ul>
							<p align=justify>
								Trata-se de uma aplicação que possibilita uma otimização na comunicação entreo orientador e aluno, possibilitando também a interação destes com a família e os demais funcionários e alunos do ambiente acadêmico, fornecendo assim um atendimento mais dinâmico e funcional.
							</p>
						</div>

						<div class="single-sidebar-widget ads-widget">
							<a href="#"><img class="img-fluid" src="../../img/Etec-Cotia.jpg" alt=""></a>
						</div>

						<d </div> </div> </div> </div> </div> </section> -->

	<!-- End post-content Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap	">
		<div class="container">
			<div class="text-center">
				<img class="d-block" src="../../img/logo_cps2.png">
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> Etec de Cotia <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.cps.sp.gov.br" target="_blank">Centro Paula Souza</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="https://www.facebook.com/etecdecotia"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/etecdecotia"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->


	<script src="../../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="../../js/jquery-ui.js"></script>
	<script src="../../js/easing.min.js"></script>
	<script src="../../js/hoverIntent.js"></script>
	<script src="../../js/superfish.min.js"></script>
	<script src="../../js/jquery.ajaxchimp.min.js"></script>
	<script src="../../js/jquery.magnific-popup.min.js"></script>
	<script src="../../js/jquery.tabs.min.js"></script>
	<script src="../../js/jquery.nice-select.min.js"></script>
	<script src="../../js/owl.carousel.min.js"></script>
	<script src="../../js/mail-script.js"></script>
	<script src="../../js/main.js"></script>
</body>

</html>