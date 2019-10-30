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
        <title>Desmotivação</title>

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
                                    <li><a href="pagTranstornoEmocional.php">Emocionais</a></li>
                                    <li><a href="pagBlog-single.html">Alimentares</a></li>
                                    <li><a href="pagBlog-single.html">Psicoses</a></li>
                                </ul>
                            </li>
                            <li><a href="pagDefasagem.php">Defasagem</a></li>
                            <li><a href="pagProblemasFamiliares.php">Problemas familiares</a></li>
                            <li><a href="pagContato.php">Contato</a></li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area relative desmotiva-banner" id="home">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Desmotivação
                        </h1>
                        <p class="text-white link-nav"><a href="pagInicio.php">Inicio </a> <span class="lnr lnr-arrow-right"></span> <a href="Desmotivação.php"> Desmotivação</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start our-mission Area -->
        <section class="our-mission-area section-gap">
            <div class="container section-top-border2">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">É melhor você tentar algo,
                                vê-lo não funcionar e aprender com isso, do que não fazer nada.</h1>
                            <p>Mark zuckerberg</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 accordion-left">

                        <!-- accordion 2 start-->
                        <dl class="accordion">
                            <dt>
                                <a href="">Desmotivação</a>
                            </dt>
                            <dd>
                                O medo do próprio fracasso e como lidar com ele é um dos fatores que podem desmotivar o aluno, por vezes, causados até mesmo por parte do medo de decepcionar a família, faz com que o aluno acabe se pressionando demais, fazendo com que o que antes lhe era encorajador, agora lhe causando medo.
                            </dd>
                            <dt>
                                <a href="">Como lidar?</a>
                            </dt>
                            <dd>
                                Para lidar como a desmotivação você precisa primeiro assumir que tem um problema para ser resolvido. A negação indica resistência e consequente não resolução do problema.

                                Antes de lhe dar sugestões de mudanças necessárias, é importante entender que as ações precisam partir de você e não de fora.

                                Reconhecer que está deixando de lado coisas importantes que deveriam ser mudadas é o primeiro passo para que as coisas voltem a ser como eram antes e você finalmente consiga se livrar dessa fase de desmotivação.

                                Mas, é claro, nem sempre os motivos que o levam ao desestímulo são internos. Alguns exemplos citados acima demonstram que nem sempre estamos no controle total da situação. Algumas atitudes podem fazer com que um a um desses problemas sejam resolvidos.

                                Após o reconhecimento do problema, aí sim, uma mudança na rotina pode ser a melhor pedida. Trocar de emprego, de curso, ou terminar um relacionamento que já não flui mais, são tarefas muito difíceis para a maioria das pessoas, mas podem ser a libertação necessária.

                                É importante separar cada motivo que o levou a ficar desmotivado e criar novas metas, objetivos e desafios. Com muita calma pode-se encontrar a melhor solução para cada problema identificado e adicionar novas ações.
                            </dd>
                            <dt>
                                <a href="">Acões devem ser tomadas</a>
                            </dt>
                            <dd>
                                O primeiro passo para que os problemas sejam resolvidos é não ficar se culpando constantemente pela situação que o rodeia. Algumas coisas são realmente inevitáveis e não há como tomar o controle total delas.

                                Ficar se martirizando por algo que você não tem como evitar não vai resolver o problema e pode deixá-lo ainda pior. É muito importante sim reconhecer os erros, mas é mais ainda reconhecer o que não está ao seu alcance.



                                Criar novos objetivos
                                Não esperar demais de outras pessoas
                                Tomar a liderança
                                Aceitar ajuda


                                Criar novos objetivos, com foco, sem desistir no caminho, é uma maneira eficiente de driblar a desmotivação. O orgulho deve ser deixado de lado nesse momento e toda ajuda pode ser bem-vinda.

                                Não se fechar nesses momentos pode ser uma das melhores coisas a se fazer, pois todo mundo precisa de apoio e ajuda em alguma fase da vida.

                                Não esperar demais de outras pessoas é outro passo importante a ser tomado. O que o indivíduo sente, apenas ele sente, e as pessoas em sua volta podem não perceber ou nem ligar para o problema. Achar que outras pessoas vão se sensibilizar com isso é um erro, e a espera pode ser eterna, até que a pessoa não aguente mais e estoure seu limite.

                                Assim como é importante dar esse passo à frente, tomar as rédeas da situação é igualmente importante. Seja aquele que decide o melhor e toma frente à situação sem depender de terceiros.

                                Alguns exercícios também podem ser feitos para ajudar nesse processo. Um deles é acordar todas as manhãs e ser grato por tudo aquilo de bom que o rodeia, agradecer pelos pequenos momentos que a vida lhe proporciona. Fazer listas também pode ajudar, comparando aquilo que se faz bem e o que se está fazendo mal, e a cada item riscado da segunda lista, uma nova vitória será conquistada.

                                Trabalhar com um sistema de recompensa por tarefas concluídas também pode funcionar, e isso motiva a pessoa a seguir firme com os novos objetivos.

                                Levantar cedo, tomar um bom café da manhã, sair para se exercitar e se dar mais tempo livre para fazer o que gosta são tarefas que todas as pessoas deveriam fazer.

                                Uma pequena dose disso todos os dias não só elimina a desmotivação, como ainda previne os sentimentos de voltarem. Errar é humano, mas reconhecer o erro e buscar uma alternativa para resolvê-los é uma atitude ainda mais inteligente!
                            </dd>

                        </dl>
                        <!-- accordion 2 end-->
                    </div>
                    <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative ">
                        <div class="overlay overlay-bg"></div>
                        <a class="play-btn" href="https://www.youtube.com/watch?v=vC0aA9hgHwI"><img class="img- mx-auto" src="../../img/about/play.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End our-mission Area -->

        <!-- Parte das frases motivacionais -->
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
        

        <!-- Start feedback Area -->
        <section class="feedback-area section-gap aboutpage-feedback-area">
            <div class="container">

                <div class="row feedback-contents justify-content-center align-items-center">
                    <div class="col-lg-6 feedback-right relative d-flex justify-content-center align-items-center">
                        <div class="overlay overlay-bg"></div>
                        <a class="play-btn" href="https://www.youtube.com/watch?v=__HwFRsW5L0"><img class="img-fluid" src="../../img/play-btn.png" alt=""></a>
                    </div>
                    <div class="col-lg-6 feedback-left">
                        <div class="active-review-carusel">
                            <div class="single-feedback-carusel">
                                <img src="../../img/Flavio.jpg" height="307px" width="300px" alt="">
                                <div class="title d-flex flex-row">
                                    <h4 class="pb-10">Flávio Augusto</h4>

                                </div>
                                <p>
                                    Quem vive só para agradar as pessoas, acaba se tornando um grande colecionador de arrependimentos.
                                </p>
                            </div>
                            <div class="single-feedback-carusel">
                                <img src="../../img/Rick.jpg" height="307px" width="300px" alt="">
                                <div class="title d-flex flex-row">
                                    <h4 class="pb-10">Rick Chesther</h4>

                                </div>
                                <p>
                                    A vida tem dois lados: o lado do problema e o da solução, e se você não for parte da solução, automaticamente fará parte do problema
                                </p>
                            </div>
                            <div class="single-feedback-carusel">
                                <img src="../../img/Ayrton.jpeg" height="265px" width="280px" alt="">
                                <div class="title d-flex flex-row">
                                    <h4 class="pb-10">Ayrton Senna</h4>

                                </div>
                                <p>
                                    Seja você quem for, seja qual for a posição social que você tenha na vida, a mais alta ou a mais baixa, tenha sempre como meta muita força, muita determinação e sempre faça tudo com muito amor e com muita fé em Deus, que um dia você chega lá. De alguma maneira você chega lá.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End feedback Area -->




        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">


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