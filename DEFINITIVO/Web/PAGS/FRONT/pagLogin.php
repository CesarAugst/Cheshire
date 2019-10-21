	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

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
		<title>Login</title>

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
							<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">faleconosco@etecdecotia.com.br </span></span></a>
						</div>
						<div class="col-lg-6 col-sm-6 col-8 header-top-right">
							<a href="Cadastro.php" class="primary-btn text-uppercase">Cadastre-se</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="pagInicio.php"><img src="../../img/cheshire1.png" width="100px" height="80px" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">



					</nav><!-- #nav-menu-container -->
				</div>
			</div>
		</header><!-- #header -->

		<!-- start banner Area -->
		<section class="banner-area relative" id="home">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner-content col-lg-8 col-md-12">
						<h1>
							Permita-se a um novo tipo de interação
						</h1>
						<p class="pt-10 pb-10 text-white">
							Esta aplicação traz uma interação mais proxima entre orientador e aluno através de uma aplicação web
						</p>

					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start appointment Area -->
		<section class="appointment-area">
			<div class="container">
				<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
					<div class="col-lg-5 col-md-6 appointment-left">
						<h1>
							Horário de atendimento
						</h1>
						<p>
							Os orientadores da Etec de Cotia estão a sua diposição nos seguintes horários:
						</p>
						<ul class="time-list">
							<li class="d-flex justify-content-between">
								<span>Segunda a Sexta</span>
								<span>08.00 Manhã - 08.00 Noite</span>
							</li>
							<li class="d-flex justify-content-between">
								<span>Sábado</span>
								<span>08.00 manhã - 12.00 Tarde</span>
							</li>

						</ul>
					</div>

					<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
						<form method="post" class="form-wrap" action="../BACK/verificaLogin.php">
							<h3 class="pb-20 text-center mb-30">Acesse sua conta</h3>
							<input type="text" class="form-control" name="txtlogin" placeholder="RM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RM'">
							<input type="password" class="form-control" name="txtsenha" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'">
							<button type="submit" class="primary-btn text-uppercase">Confirmar</button>
							<center><a href="pagCadastro.php" class="primary-btn text-uppercase">Não possui uma conta?</a></center>
						</form>


					</div>
				</div>
			</div>
		</section>
		<!-- End appointment Area -->



		<!-- Start offered-service Area -->
		<section class="offered-service-area section-gap">
			<div class="container">

			</div>
		</section>
		<!-- End offered-service Area -->



		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-2  col-md-6">

					</div>

					<div class="col-lg-6  col-md-12">

					</div>
				</div>

				<div class="row footer-bottom d-flex justify-content-between">
					<p class="col-lg-5 col-sm-05 footer-text m-0">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> Etec de Cotia | Centro Paulo Souza <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href=" http://www.etecdecotia.com.br/" target="_blank">Etec</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
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