<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['log'] != 'ativo') {
	session_destroy();
	header("location: pagLogin.php");
}
?>
<h<html lang="zxx" class="no-js">

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
		<title>Transtornos Alimentares</title>

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
	</head>

	<body>
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
							echo "Bem Vindo! <b>" . $_SESSION['rm'] . " </b>";
							?>
							<a href="../BACK/logout.php" class="primary-btn text-uppercase">Logout</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="pagInicio."><img src="../../img/cheshire1.png" width="100px" height="70px" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-has-children"><a href="">Transtornos</a>
								<ul>
									<li><a href="pagtranstornoEmocional.php">Emocionais</a></li>
									<li><a href="pagBlog-single.html">Alimentares</a></li>
									<li><a href="pagBlog-single.html">Psicoses</a></li>
								</ul>
							</li>
							<li><a href="pagDefasagem.php">Defasagem</a></li>
							<li><a href="pagDesmotivação.php">Desmotivação</a></li>
							<li><a href="pagProblemasFamiliares.php">Problemas familiares</a></li>
							<li><a href="pagContato.php">Contato</a></li>

						</ul>
					</nav><!-- #nav-menu-container -->
				</div>
			</div>
		</header><!-- #header -->

		<!-- start banner Area -->
		<section class="banner-area relative TranstornoAlimentar-banner" id="home">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Transtornos Alimentares
						</h1>
						<p class="text-white link-nav"><a href="pagInicio.php">Inicio </a> <span class="lnr lnr-arrow-right"></span><a href="pagTranstornoAlimentar.php">Transtornos Alimentares </a>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->



		<section class="facilities-area section-gap">
			<div class="container">
				<div class="row d-flex section-top-border2 justify-content-center">
					<div class="menu-content pb-70 col-lg-7">
						<div class="title text-center">
							<h1 class="mb-10">O que são transtornos alimentares?</h1>
							<p>
								<dd class="text-black">
									Os Transtornos Alimentares são caracterizados por perturbações no comportamento alimentar, podendo levar ao emagrecimento extremo (caquexia - devido à inadequada redução da alimentação), à obesidade (devido à ingestão de grandes quantidades de comida), ou outros problemas físicos. Os principais tipos de Transtorno Alimentar são a Anorexia Nervosa e a Bulimia Nervosa, e ambos têm como características comuns: uma intensa preocupação como o peso e o medo excessivo de engordar, uma percepção distorcida da forma corporal, e a auto-avaliação baseada no peso e na forma física. (1, 3, 10, 11)

									Alguns autores caracterizam os Transtornos Alimentares como síndromes ligadas à cultura de determinadas sociedades. O que evidencia esta hipótese é o fato de que a Anorexia e a Bulimia têm uma prevalência maior entre mulheres jovens de países ocidentais, principalmente as que pertencem às camadas sociais mais privilegiadas.</dd>
							</p>
						</div>
					</div>
				</div>
				<div class="row section-top-border2">

					<center>
						<h2 class="section-gap">Videos que irão te ajudar a entender os transrtornos alimentares:</h2>
					</center>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Anorexia</h4>
							<div class=" video-anorexia relative d-flex justify-content-center align-items-center">
								<div class="overlay overlay-bg"></div>
								<a class="play-btn" href="https://www.youtube.com/watch?v=AM6FDrPqP5c">
									<img class="img-fluid mx-auto" src="../../img/play-btn.png" alt=""></a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Bulimia</h4>
							<div class=" video-bulimia relative d-flex justify-content-center align-items-center">
								<div class="overlay overlay-bg"></div>
								<a class="play-btn" href="https://www.youtube.com/watch?v=vZ_A5rKEo8A">
									<img class="img-fluid mx-auto" src="../../img/play-btn.png" alt=""></a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Compulsão alimentar</h4>
							<div class=" video-compulsao relative d-flex justify-content-center align-items-center">
								<div class="overlay overlay-bg"></div>
								<a class="play-btn" href="https://www.youtube.com/watch?v=67NZXwWNVkw">
									<img class="img-fluid mx-auto" src="../../img/play-btn.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End facilities Area -->

		<!-- Start offered-service Area -->
		<section class="offered-service-area ">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 offered-left">
						<br><br><br><br>
						<h1 class="text-white">Tratamento com profissionais:</h1>
						<p>

						</p>
						<div class="service-wrap row">
							<div class="col-lg-6 col-md-6">
								<div class="single-service">
									<div class="thumb">
										<img class="img pt-10 pb-10" src="../../img/s1.jpg" alt="">
									</div>
									<a href="#">
										<h4 class="text-white">Tratamento psicológico</h4>
									</a>
									<p class="text-white">
										O tratamento dos Transtornos Alimentares busca restaurar o comportamento alimentar adequado, e restabelecer o peso considerado normal para a idade e a altura do indivíduo. O objetivo do tratamento é tirar o indivíduo do desequilíbrio clínico que a gravidade dos sintomas pode gerar.
									</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="single-service">
									<div class="thumb">
										<img class="img pt-10 pb-10" src="../../img/s2.jpg" alt="">
									</div>
									<a href="#">
										<h4 class="text-white">Tratamento Fisico</h4>
									</a>
									<p class="text-white">
										A atividade fisica é recomendada como tratamento para transtornos alimentares por médicos nutricionistas. O exercicio fisico ajuda a manter equilibrio do organismo e da flora instetinal trazendo beneficios fisicos e psicológicos para o individou em questão.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="offered-right relative">
							<div class="overlay overlay-bg"></div>
							<h3 class="relative text-white">Sintomas</h3>
							<ul class="relative dep-list">
								<li><a href="#">Colesterol acima da média</a></li>
								<li><a href="#">Costume de comer muito rápido</a></li>
								<li><a href="#">Sobrepeso e obesidade</a></li>
								<li><a href="#">Sem controle sobre o quanto comer</a></li>
								<li><a href="#">Isolamento social</a></li>

							</ul>
							<a class="viewall-btn" href="#">Entenda sobre transtorno alimentares</a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<!-- End offered-service Area -->

		<!-- Start feedback Area -->
		<section class="whole-wrap">
			<div class="container section-gap">
				<h2 class="mb-30">Conclusão</h2>
				<div class="row">
					<div class="col-lg-12 text-black">
						<blockquote class="generic-blockquote">
							Distúrbios alimentares podem ser originados de hábitos alimentares que causam danos à saúde como a redução extrema ou consumo em excesso de alimentos.

							Os distúrbios alimentares são comuns na adolescência e no começo da adulta. Eles estão relacionados a uma série de consequências psicológicas, como ansiedade e pressões sociais para o chamado ‘corpo perfeito’.

							De acordo com uma pesquisa realizada pela Associação Americana de Psiquiatria, um por cento da população mundial – cerca de 70 milhões de pessoas – sofrem com transtornos alimentares.

							Embora esses distúrbios sejam mais frequentes com pessoas do sexo feminino, com faixa etária entre 12 e 25 anos, no Reino Unido, um estudo feito pelo Serviço Nacional de Saúde (NHS – sigla em inglês) mostrou um aumento de 67% em homens entre 26 e 40 anos. Os especialistas que realizaram o estudo concluíram que uma parte considerável desses transtornos alimentares está ligada às redes sociais.

							Transtorno alimentar é um tema que merece uma atenção especial, por isso separemos os tipos, causas, sintomas e como cada distúrbio pode ser tratado
						</blockquote>
					</div>
				</div>
			</div>
		</section>
		<!-- End feedback Area -->

		<!-- Tabela -->
		<div class="whole-wrap">
			<div class="container">
				<h3 class="mb-30">Os oito paises com maiores taxas de obesidade</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial"></div>
							<div class="country">Paises</div>
							<div class="visit text-black">Taxas/População</div>
							<div class="percentage"></div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country"> <img src="../../img/elements/Eua.jpg" alt="flag">Estados Unidos</div>
							<div class="visit  text-black">31.8%/327.822.431</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" style="width: 31.8%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country"> <img src="../../img/elements/china.png" alt="flag">China</div>
							<div class="visit text-black">5%/1.634.220.004</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-2" role="progressbar" style="width: 5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country"> <img src="../../img/elements/Russia.jpg" alt="flag">Russia</div>
							<div class="visit text-black">28%/145.421.831</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-3" role="progressbar" style="width: 28%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country"> <img src="../../img/elements/Brasil.jpg" alt="flag">Brasil</div>
							<div class="visit text-black">20%/209.351.024</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-4" role="progressbar" style="width: 20%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">05</div>
							<div class="country"> <img src="../../img/elements/mexico.png" alt="flag">México</div>
							<div class="visit text-black">31.8%/129.291.056</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-5" role="progressbar" style="width: 31.8%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">06</div>
							<div class="country"> <img src="../../img/elements/egypt.jpg" alt="flag">Egito</div>
							<div class="visit text-black">34.1%/97.794.023</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-6" role="progressbar" style="width: 34.1%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">07</div>
							<div class="country"> <img src="../../img/elements/f4.jpg" alt="flag">Alemanha</div>
							<div class="visit text-black">22.5%/82.794.079</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-7" role="progressbar" style="width: 22.5%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">08</div>
							<div class="country"> <img src="../../img/elements/paquistao.png" alt="flag">Paquistão</div>
							<div class="visit text-black">15.1%/197.551.004</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-8" role="progressbar" style="width: 15.1%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<a href="https://exame.abril.com.br/mundo/os-10-paises-com-mais-pessoas-obesas-no-mundo/">
							<dd>fonte/https://exame.abril.com.br/mundo/os-10-paises-com-mais-pessoas-obesas-no-mundo</dd>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- Fim tabela -->

		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<img src="../../img/logo_cps.png">
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