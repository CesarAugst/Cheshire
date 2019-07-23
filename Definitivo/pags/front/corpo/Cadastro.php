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
                                                        <a href="Login.php" class="primary-btn text-uppercase">Ja possui uma conta?</a>
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
                                                    <center><form method="post" class="form-wrap" action="verificaCadastro.php">
								<h3 class="pb-20 text-center mb-30">Cadastre-se</h3>	
                                                                <input type="text" class="form-control" name="txtlogin" placeholder="Login" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Login'" >
                                                                <input type="text" class="form-control" name="txtsenha" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'" >
								<input type="text" class="form-control" name="txtnome" placeholder="Nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" >
								<input type="text" class="form-control" name="txtsobrenome" placeholder="Sobrenome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sobrenome'" >
                                                               <!--<input type="text" class="form-control" name="txtfuncao" placeholder="Função" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Funcao'" > -->

								<div class="form-select" id="service-select">
                                                                    <select name="optfuncao">
										<option data-display="">Função</option>
										<option value="1">aluno</option>
										<option value="2">funcionario</option>
										<option value="3">orientador</option>										
									</select>
								</div>	

								<input type="text" class="form-control" name="txttel" placeholder="Telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" >

								<input type="text" class="form-control" name="txtcel" placeholder="Celular" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Celular'" >

								<input type="text" class="form-control" name="txtend" placeholder="Endereço" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Endereço'" >
                                                                <button type="submit" class="primary-btn text-uppercase">Confirmar</button>
							</form>
                                                        <?php
                                                        
                                                        ?>
                                                            
						</div>
					</div>
				</div>	
			</section>
			<!-- End appointment Area -->

			
			<!-- End facilities Area -->
			

			<!-- Start offered-service Area -->
			<section class="offered-service-area section-gap">
				<div class="container">
					
				</div>	
			</section>
			<!-- End offered-service Area -->
		

		    <!-- End team Area -->				
						
			<!-- End feedback Area -->	

		    <!-- Start brands Area -->
		  
		    <!-- End brands Area -->
	
			
			<!-- end recent-blog Area -->	

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6">
							
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