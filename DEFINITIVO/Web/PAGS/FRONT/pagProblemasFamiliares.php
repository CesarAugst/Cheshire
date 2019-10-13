<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['log'] != 'ativo') {
    session_destroy();
    header("location: Login.php");
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
            <title>Problemas familiares</title>

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
                                <a href="pagLogout.php" class="primary-btn text-uppercase">Logout</a>
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
                                        <li><a href="pagBlog-home.html">Emocionais</a></li>
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
			<section class="banner-area relative problemas-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Problemas familiares			
							</h1>	
							<p class="text-white link-nav"><a href="pagInicio.php">Inicio </a>  <span class="lnr lnr-arrow-right"></span><a href="ProblemasFamiliares.php">Problemas familiares </a> 
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">
					<center><h1> É necessário enteder!</h1>
					<img  height="260px" width="320px" src="../../img/Compreender.png" alt=""></center>
					<p class="sample-text text-black" >
					<dd class="text-black">Os problemas familiares podem interferir no andamento do aluno no ambiente escolar, ainda mais em sua capacidade de interação social, uma vez que um ambiente violento em certos estimula o aluno a reproduzir esse comportamento na escola, e em outros casos estimula a reproduzir comportamentos apáticos.
Segundo um estudo  realizado pela USP, foram acompanhados os casos de 3 alunos diferentes que possuíam dificuldade de letramento em uma escola estadual. Nos casos apresentados foi apontado pela coordenação do colégio que os pais se encontravam em de certa forma ausentes no processo de aprendizagem de seus filhos, sendo questionados pelas razões, eles apontaram que sentiam dificuldade de se aproximar ao contexto escolar de seus filhos. A partir desse estudo, entende-se que o ambiente familiar conturbado ou mesmo ausente influencia negativamente no aluno.
Como as atribuições e a própria formação do orientador não o permitem adentrar muito nesse contexto, quando o aluno lhe apresenta dificuldades de relacionamento familiar, o máximo que a orientação pode fazer é ouvi-lo sem apresentar críticas ou objeções, nesse caso melhorando o laço de confiança que o aluno cultiva, sendo essencial para o sucesso da conversa e de bons retornos para o mesmo. Nesse aspecto a aplicação seria útil apresentando orientações ao orientador de como atender o aluno, evitando equívocos e incidentes que poderiam causar danos para o aluno.</dd>


					</p>
				</div>
			</section>
			<!-- End Sample Area -->

			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30">Tenha tempo para a sua familia</h3>
						<div class="row">
							<div class="col-md-3">
								<img src="../../img/tempo-familia.jpg" alt=""  class="img-fluid">
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p">
								<p>Tenha tempo para a família
O cuidado com as relações familiares deve ser similar ao dispensado a uma planta, que precisa de atenção diariamente. Dedique parte do seu tempo para o convívio familiar e esteja atento para a qualidade desses momentos: quando estiver com sua família, esteja realmente com ela — e não com a televisão, celular ou amigos das redes sociais. 
<p>Há momentos únicos em nossa familia e a presença ou não sua pode fazer toda a diferença. Compartilhar momentos em família é fundamental para estreitar os laços e colecionar boas lembranças. Além de gerar aproximação, fugir da rotina da casa é uma excelente maneira de amenizar o estresse do dia a dia.</p>
								</p>
							</div>
						</div>
					</div>
					<div class="section-top-border text-right">
						<h3 class="mb-30">Aceite e entenda</h3>
						<div class="row">
							<div class="col-md-9">
								<p class="text-right">Compartilhar momentos em família é fundamental para estreitar os laços e colecionar boas lembranças. Além de gerar aproximação, fugir da rotina da casa é uma excelente maneira de amenizar o estresse do dia a dia.Guardar mágoas ou sentimentos negativos em relação aos pais, filhos ou irmãos só serve para prolongar uma situação que poderia ser resolvida de maneira mais rápida. Caso tenha alguma situação ou sentimento pendente, abra seu coração e fale a respeito de como você se sente em relação a determinado assunto.</p>
								<p class="text-right">Entenda que as pessoas acertam, erram, decepcionam e despertam orgulho. Não exija perfeição de seus familiares e, acima de tudo, ame-os incondicionalmente.</p>
							</div>
							<div class="col-md-3">
								<img src="../../img/entendimento.jpg" alt="" height="164px" width="250px" >
							</div>
						</div>
					</div>
					<div class="section-top-border">
						<h2 class="mb-30">Tipos de familia:</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Familia monoparental</h4>
									<p>Família monoparental: composta por apenas um dos progenitores: pai ou mãe. Os motivos que possibilitam essa estrutura são diversos. Englobam causas circunstanciais (morte, abandono ou divórcio) ou ainda, a decisão (na maior parte dos casos, uma decisão da mulher) de ter um filho de forma independente.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Familia contemporânea</h4>
									<p>Família contemporânea: é caracterizada pela inversão dos papéis do homem e da mulher na estrutura familiar passando a ser a mulher a chefe de família. Abrange a família monoparental, constituída por mãe solteira ou divorciada.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Familia pais</h4>
									<p>Família Pais :. Consiste de um dos pais (na maioria das vezes a mãe) e seus filhos. Você pode ter diferentes origens. Pais separados ou divorciados, onde as crianças vivem com um dos pais, por gravidez precoce, onde a família de uma mãe solteira é formado e, finalmente, a morte de um dos cônjuges</p>
								</div>
							</div>
						</div>
					</div>
					<div class="section-top-border">
						<h2 class="mb-30">A importância da familia na sociedade</h2>
						<div class="row">
							<div class="col-lg-12 text-black">
								<blockquote class="generic-blockquote">
								À medida que o tempo passa, as transformações se dão cada vez mais rápido em nossas vidas. Tais mudanças não estão apenas associadas aos produtos ou à tecnologia, a rapidez com que este processo acontece também influencia na nossa percepção sobre a sociedade e como as relações interpessoais ocorrem no dia a dia.

A maneira como enxergamos a família também está se transformando. Não precisamos voltar muito no tempo para lembrarmos que o casamento entre duas pessoas de cores diferentes era algo abominável para uns e em certos lugares até proibido.

A relação da família sempre teve grande importância no desenvolvimento da sociedade. O núcleo familiar, pais e filhos, é responsável pela forma como veremos o mundo no futuro. A escola tem o objetivo de difundir conhecimento e não de educar, dar limites ou moralidade.

Não podemos permitir que a influência da família na sociedade seja desvalorizada, ela é quem define nossos princípios, o que entendemos por certo e errado e, principalmente, como nos relacionaremos com os integrantes de outras famílias. É a partir da nossa casa que aprendemos como administrar os nossos sentimentos e tudo isso contribui completamente como será o comportamento da sociedade futuramente
								</blockquote>
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