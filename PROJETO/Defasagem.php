	<!DOCTYPE html>
        
        <?php
session_start();
if($_SESSION['log'] != 'ativo'){
session_destroy();
    header("location: Login.php");
} 
?>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Defasagem</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="csspg/linearicons.css">
			<link rel="stylesheet" href="csspg/font-awesome.min.css">
			<link rel="stylesheet" href="csspg/bootstrap.css">
			<link rel="stylesheet" href="csspg/magnific-popup.css">
			<link rel="stylesheet" href="csspg/jquery-ui.css">				
			<link rel="stylesheet" href="csspg/nice-select.css">							
			<link rel="stylesheet" href="csspg/animate.min.css">
			<link rel="stylesheet" href="csspg/owl.carousel.css">			
			<link rel="stylesheet" href="csspg/jquery-ui.css">			
			<link rel="stylesheet" href="csspg/main.css">
		</head>
		<body>	
		  <header id="header">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-left">
			  				<a href="tel:+9530123654896"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+55 11 4148-2099</span></span></a>
				  			<a href="mailto:faleconosco@etecdecotia.com.br"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">faleconosco@etecdecotia.com.br</span></span></a>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-right">
                                                    <?php
                                                        echo "Bem Vindo! <b>" . $_SESSION['rm'] . " </b>";
                                                    ?>
                                                    <a href="logout.php" class="primary-btn text-uppercase">Logout</a>
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
                                  <a href="Inicio.php"><img src="img/cheshire1.png" width="100px" height="70px" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-has-children"><a href="">Transtornos</a>
			            <ul>
			              <li><a href="blog-home.html">Emocionais</a></li>
			              <li><a href="blog-single.html">Alimentares</a></li>
			              <li><a href="blog-single.html">Psicoses</a></li>
			            </ul>
			          </li>	
                                  <li><a href="Defasagem.php">Defasagem</a></li>
			          <li><a href="about.html">Desmotivação</a></li>
			          <li><a href="about.html">Problemas familiares</a></li>			        
			          <li><a href="departments.html">Contato</a></li>
                                </ul>		          				          					          		          			        			        
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								<!-- tinha um titulo aqui -->				
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start offered-service Area -->
			<section class="offered-service-area dep-offred-service">
				<div class="container">
					<div class="row offred-wrap section-gap">
						<div class="col-lg-8 offered-left">
							<h1>Problemas na defasagem escolar</h1>
							<p>
								<h5>O aluno que apresenta defasagem escolar deve ser orientado pelo orientador educacional para aproveitar da melhor maneira possível suas habilidades, promovendo um autoconhecimento que lhe favoreça em determinada área de sua escolha, uma vez que o aluno pode não ser bom em um determinado ramo específico, mas pode ser melhor em outro.
                                                                    Segundo estudo um levantamento de dados realizado pelo INEP em 2017, o número de alunos que demonstravam um nível de conhecimento didático incompativelmente inferior ao esperado pela sua idade (defasagem escolar) em 2017 ensino médio chegava a 28%.

							</p>
                                                        <img class="img-fluid pt-10 pb-10" src="img/defasagem_grafico.jpg" alt="">
							<p>
                                                        A aplicação proposta pelo projeto propõe uma forma de acompanhamento online de uma planilha de estudos que é desenvolvida pelo orientador juntamente do aluno, onde antes  havia um acompanhamento quinzenal ou semanal passa a ser em tempo real, para assim planejarem juntos uma forma de aprimorar o processo de aprendizagem do docente e reduzir esse nível de defasagem.</h5>
							</p>
							
							<div class="service-wrap row">
								<div class="col-lg-6 col-md-6">
									<div class="single-service">
										<div class="thumb">
											<img class="img-fluid" src="img/s1.jpg" alt="">		
										</div>
										<a href="#">
											<h4>Cardiac Treatment</h4>
										</a>	
										<p>
											inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="single-service">
										<div class="thumb">
											<img class="img-fluid" src="img/s2.jpg" alt="">		
										</div>
										<a href="#">
											<h4>Routine Checkup</h4>
										</a>	
										<p>
											inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</div>
								</div>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="offered-right relative sidebar-offered-service">
								<div class="overlay overlay-bg"></div>
								<h3 class="relative text-white">Causas comuns da defasagem</h3>
								<ul class="relative dep-list">
                                                                    
									<li><a href="#">fragilidade da escola</a></li>
									<li><a href="#">material didático</a></li>
                                                                        <li><a href="#">corpo docente</a></li><br>
                                                                </ul>
                                                                <h3 class="relative text-white">Consequências</h3>
                                                                <ul class="relative dep-list">
                                                                        
									<li><a href="#">Notas baixas</a></li>
									<li><a href="#">Reprovação</a></li>
									<li><a href="#">Abandono Escolar</a></li>
								</ul>
										
							</div>	
							<form class="form-wrap sidebar-appointment">
								<h3 class="pb-20 text-center">Book an Appointment</h3>		
								<input type="text" class="form-control" name="name" placeholder="Patient Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'" >
								<input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" >
								<input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" >
								<input id="datepicker1" name="dop" class="dates form-control"  placeholder="Date of Birth" type="text">   
								<div class="form-select" id="service-select">
									<select>
										<option data-display="">Disease Type</option>
										<option value="1">Type One</option>
										<option value="2">Type Two</option>
										<option value="3">Type Three</option>
										<option value="4">Type Four</option>
									</select>
								</div>	
								<input id="datepicker2" class="dates form-control"  placeholder="appointment Date" type="text">  
								<textarea name="messege" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea> 
								<button class="primary-btn text-uppercase">Confirm Booking</button>
							</form>	
							<div class="appointment-left sidebar-service-hr">
								<h3 class="pb-20">
									Servicing Hours
								</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.
								</p>
								<ul class="time-list">
									<li class="d-flex justify-content-between">
										<span>Monday-Friday</span>
										<span>08.00 am - 10.00 pm</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Saturday</span>
										<span>08.00 am - 10.00 pm</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Sunday</span>
										<span>08.00 am - 10.00 pm</span>
									</li>																
								</ul>
							</div>													
						</div>
					</div>
				</div>	
			</section>
			<!-- End offered-service Area -->			

			<!-- Start team Area -->
		    <section class="team-area pt-120">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Consultants</h1>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		                    </div>
		                </div>
		            </div>
		            <div class="row justify-content-center d-flex align-items-center">
		                <div class="col-lg-3 col-md-6 single-team">
		                    <div class="thumb">
		                        <img class="img-fluid" src="img/t1.jpg" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-behance"></i></a>
									</div>			                        	
		                            <p>
		                            	inappropriate behavior
		                            </p>
		                            <h4>Andy Florence</h4>		                            
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6 single-team">
		                    <div class="thumb">
		                        <img class="img-fluid" src="img/t2.jpg" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-behance"></i></a>
									</div>			                        	
		                            <p>
		                            	inappropriate behavior
		                            </p>
		                            <h4>Andy Florence</h4>		                            
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6 single-team">
		                    <div class="thumb">
		                        <img class="img-fluid" src="img/t3.jpg" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-behance"></i></a>
									</div>			                        	
		                            <p>
		                            	inappropriate behavior
		                            </p>
		                            <h4>Andy Florence</h4>		                            
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6 single-team">
		                    <div class="thumb">
		                        <img class="img-fluid" src="img/t4.jpg" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-behance"></i></a>
									</div>			                        	
		                            <p>
		                            	inappropriate behavior
		                            </p>
		                            <h4>Andy Florence</h4>		                            
		                        </div>
		                    </div>
		                </div>		                		                		                
		            </div>
		        </div>
		    </section>
		    <!-- End team Area -->				
				    			
		    <!-- Start brands Area -->
		    <section class="brands-area">
		        <div class="container">
		            <div class="brand-wrap section-gap">
		                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End brands Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Contact Us</h6>
								<p>
									56/8, Santa bullevard, Rocky beach, San fransisco, Los angeles, USA
								</p>
								<h3>012-6532-568-9746</h3>
								<h3>012-6532-568-97468</h3>
							</div>
						</div>							
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn circle">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>					
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>