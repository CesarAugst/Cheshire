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
            <title>Transtornos Emocionais</title>

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
			<section class="banner-area relative TranstornoEmocional-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Transtornos Emocionais		
							</h1>	
							<p class="text-white link-nav"><a href="pagInicio.php">Inicio </a>  <span class="lnr lnr-arrow-right"></span><a href="pagTranstornoEmocional.php">Transtornos Emocionais </a> 
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start Sample Area -->
			<section class="sample-text-area">
			<center><h1 class="text-black">O que é um transtorno emocional?</h1>
				<div class="col-md-6 accordion-center">
					
					
					<p class="sample-text text-black" >
					<dd class="text-black">O transtorno emocional se caracteriza por dificuldades sociais criadas por comportamentos dissociativos, agressivos, amedrontados ou alienados. A rotina estressante, juntamente à presença excessiva da tecnologia, tem afetado seriamente a saúde emocional e mental da população. Transtornos como: depressão, ansiedade, síndrome do pânico, estresse, fobia social, transtorno comportamental e TOC, estão cada vez mais comuns. Por isso mesmo é importante estar alerta!

Vou apresentar, em mais detalhes, cada um desses tipos de transtornos emocionais citados cima e mostrar seus sinais para que entenda como lidar assertivamente com eles e não deixar que causem maiores danos.</dd>


					</p>
					
			</center>
				</div>
			</section>
			<!-- End Sample Area -->

			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30">Ansiedade</h3>
						<div class="row">
							<div class="col-md-3">
								<!--<div class=" feedback-right2 relative d-flex justify-content-center align-items-center" >
                      		  	<div class="overlay overlay-bg"></div>
									<a class="play-btn" href="https://www.youtube.com/watch?v=BsA2yN37cCg"><img class="img" src="../../img/play-btn.png" alt=""></a></div>-->
									
									<img src="../../img/ansiedade.jpg" alt="" height="210px" width="250px" >
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p ">
								<p>Quando na medida certa, a ansiedade é positiva para o ser humano,<br> pois age liberando uma série de hormônios capazes de nos tornar mais alertas e ativos diante dos desafios.
								<p>
									 Contudo, quando demasiada, a ansiedade se torna um grave transtorno emocional que prejudica a vida social e profissional do indivíduo. Uma pessoa que sofre de um distúrbio de ansiedade está sempre angustiada em relação a algo que está por vir, não conseguindo se dissociar desse foco e sofrendo muito.
								</p>
Tratamento: O médico deve verificar se a ansiedade está ligada a uma doença física – tratando a mesma para acabar com o sintoma – ou a um distúrbio de origem emocional, ou os dois, que pode levar ao uso de medicamentos e terapia.</p>
								</p>
							</div>
						</div>
					</div>

					<div class="section-top-border text-right">
						<h3 class="mb-30">Simdrome do Pânico</h3>
						<div class="row">
							<div class="col-md-9">
								<p class="text-right">Um dos tipos de transtornos emocionais mais frequentes atualmente é a Síndrome do Pânico, desencadeada por situações estressantes ou traumáticas. Trata-se de crises agudas de ansiedade em que o indivíduo tem intenso medo e angústia de que algo muito ruim irá acontecer, mesmo tendo consciência de que isso é improvável. Os episódios desse transtorno emocional acontecem de forma inesperada, tendo sintomas emocionais e físicos que podem levar o indivíduo até um desmaio.

Tratamento: O acompanhamento médico visa reduzir as ocorrências das crises, bem como seu tempo de duração e gravidade. </p>
								<p class="text-right">O tratamento também pode ser feito por meio de psicoterapia e medicamentos.</p>
							</div>
							<div class="col-md-3">
								<img src="../../img/Síndrome-do-Panico.jpg" alt="" height="164px" width="250px" >
							</div>
						</div>
					</div>

					<div class="section-top-border">
						<h3 class="mb-30">Estresse</h3>
						<div class="row">
							<div class="col-md-3">
								<img src="../../img/Estresse.jpg" alt="" height="210px" width="250px">
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p ">
								<p>
								O mal do século, o estresse, está presente na vida de grande parte da população mundial. Seu crescimento é creditado ao estilo de vida moderno, em que os indivíduos são cobrados intensamente o tempo todo. O estresse pode se manifestar de maneiras diversas, incluindo sintomas emocionais – como irritação, descontrole emocional, choro e extrema preocupação – e sintomas físicos, incluindo fortes dores de cabeça, estômago, pelo corpo, bruxismo, sudorese, tremores e tonturas.
								</p>
								Tratamento: É essencial identificar a fonte do estresse para eliminá-la e buscar acompanhamento médico também. Dependendo do caso, o paciente pode precisar de terapia.
								<p>
								
							</div>
						</div>
					</div>

					<div class="section-top-border">
						<h2 class="mb-30">Videos que irão te ajudar:</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Ansiedade</h4>
										<div class=" video-left relative d-flex justify-content-center align-items-center" >
                      		  				<div class="overlay overlay-bg"></div>
											<a class="play-btn" href="https://www.youtube.com/watch?v=BsA2yN37cCg">
											<img class="img-fluid mx-auto" src="../../img/play-btn.png" alt=""></a>
										</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Sindrome do Pânico</h4>
										<div class=" video-center relative d-flex justify-content-center align-items-center" >
                      		  				<div class="overlay overlay-bg"></div>
											<a class="play-btn" href="https://www.youtube.com/watch?v=thsBnZyUJns">
											<img class="img-fluid mx-auto" src="../../img/play-btn.png" alt=""></a>
										</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Estresse</h4>
										<div class=" video-right2 relative d-flex justify-content-center align-items-center" >
                      		  				<div class="overlay overlay-bg"></div>
											<a class="play-btn" href="https://www.youtube.com/watch?v=o7oTTckZPQA">
											<img class="img-fluid mx-auto" src="../../img/play-btn.png" alt=""></a>
										</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section-top-border">
						<h3 class="mb-30">Os oito paises com maiores taxas de depressão</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial"></div>
									<div class="country">Paises</div>
									<div class="visit">Taxas/População</div>
									<div class="percentage"></div>
								</div>
								<div class="table-row">
									<div class="serial">01</div>
									<div class="country"> <img src="../../img/elements/bandeira_ucrania.jpg" alt="flag">Ucrânia</div>
									<div class="visit">6.3%/48.457.102</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" style="width: 6.3%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">02</div>
									<div class="country"> <img src="../../img/elements/f5.jpg" alt="flag">Austrália</div>
									<div class="visit">6.1%/24.621.009</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-2" role="progressbar" style="width: 6.1%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">03</div>
									<div class="country"> <img src="../../img/elements/f3.jpg" alt="flag">Estados Unidos</div>
									<div class="visit">6.0%/327.822.431</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-3" role="progressbar" style="width: 6%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">04</div>
									<div class="country"> <img src="../../img/elements/Brasil.jpg" alt="flag">Brasil</div>
									<div class="visit">5.9%/209.351.024</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-4" role="progressbar" style="width: 5.9%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">05</div>
									<div class="country"> <img src="../../img/elements/Portugual.jpg" alt="flag">Portugual</div>
									<div class="visit">5.7%/10.291.056</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-5" role="progressbar" style="width: 5.7%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">06</div>
									<div class="country"> <img src="../../img/elements/lituania.jpg" alt="flag">Lituânia</div>
									<div class="visit">5.6/2.794.023</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-6" role="progressbar" style="width: 5.6%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">07</div>
									<div class="country"> <img src="../../img/elements/nova_zelandia.jpg" alt="flag">Nova zelândia</div>
									<div class="visit">5.4%/4.794.079</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-7" role="progressbar" style="width: 5.4%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">08</div>
									<div class="country"> <img src="../../img/elements/replubica_moldavia.jpg" alt="flag">Repluica da Moldávia</div>
									<div class="visit">5.4%/3.551.004</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-8" role="progressbar" style="width: 5.4%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>		
								</div>
								<a href= "https://saude.estadao.com.br/galerias/geral,os-15-paises-com-maiores-taxas-de-depressao-do-mundo,30422"><dd>fonte/https://saude.estadao.com.br/galerias/geral,os-15-paises-com-maiores-taxas-de-depressao-do-mundo,30422</dd>
							</div>
						</div>
					</div>
					
					
					
			</div>
			<!-- End Align Area -->

			<!-- start footer Area -->		
            <footer class="footer-area section-gap">
                <div class="container">


                    <footer class="footer-area section-gap">
                        <div class="container">
                            <img src="../../img/logo_cps.png">
                            <div class="row footer-bottom d-flex justify-content-between">
                                <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Etec de Cotia <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.cps.sp.gov.br" target="_blank">Centro Paula Souza</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                <div class="col-lg-4 col-sm-12 footer-social">
                                    <a href="https://www.facebook.com/etecdecotia"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/etecdecotia"><i class="fa fa-twitter"></i></a>
                                </div>					
                            </div>
                        </div>
                    </footer>
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