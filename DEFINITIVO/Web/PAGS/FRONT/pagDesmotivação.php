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
                        echo "Bem Vindo! <b>" . $_SESSION['nome'] . " </b>";
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
                                <li><a href="pagTranstornoAlimentar.php">Alimentares</a></li>
                            </ul>
                        </li>
                        <li><a href="pagDefasagem.php">Defasagem</a></li>
                        <li><a href="pagProblemasFamiliares.php">Problemas familiares</a></li>
                        <li><a href="pagContato.php">Contato</a></li>
                        <li><a href="pagMenuPrincipal.php">Mensagens</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- Fim cabeçalho -->

    <!-- start banner Area -->
    <section class="banner-area relative desmotiva-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Desmotivação
                    </h1>
                    <p class="text-white link-nav"><a href="pagInicio.php">Inicio </a> <span class="lnr lnr-arrow-right"></span> <a href="pagDesmotivação.php"> Desmotivação</a></p>
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
                            <a href="">Escolar</a>
                        </dt>
                        <dd>
                            A educação há muito é uma forma de ascensão pessoal e intelectual. Uma fonte
                            farta de conhecimento e possível de libertação das pessoas. Porém, enfrenta diversos
                            problemas estruturais, pessoais, físicos dentre outros tantos. É preciso repensá-la e
                            refletir sobre as dificuldades que assolam o cotidiano escolar.
                        </dd>
                        <dt>
                            <a href="">Trabalho</a>
                        </dt>
                        <dd>
                            A desmotivação profissional é causada por diversos fatores decorrentes da rotina diária de um profissional. O acúmulo de tarefas, obrigações e as cobranças geradas por um mercado cada vez mais competitivo e exigente acabam gerando a tão indesejada desmotivação.
                            É importante que o indivíduo que visa construir uma carreira de sucesso consiga identificar as causas de sua desmotivação, antes que isto lhe gere problemas. Ao identificá-las, deve procurar meios para resolvê-las e superá-las a fim de recuperar sua motivação e obter melhores resultados, tanto para si quanto para a organização.
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

    <center>
        <h1>Causas comuns de desmotivação</h1>
    </center>
    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30">Vulnerabilidade</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="../../img/vulnerabilidade.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 mt-sm-20 left-align-p">
                        <p align=justify>Vulnerabilidade social é o conceito que caracteriza a condição dos grupos de indivíduos que estão a margem da sociedade, ou seja, pessoas ou famílias que estão em processo de exclusão social, principalmente por fatores socioeconômicos.
                            Algumas das principais características que marcam o estado de vulnerabilidade social são as condições precárias de moradia e saneamento, os meios de subsistência inexistentes e a ausência de um ambiente familiar, por exemplo.
                        </p>

                        <p align=justify>
                            Estes fatores desmotivam pela percepição de desigualdade, o que muitas vezes gera diversas outras dificuldade como dificuldade em alcançar um bom desempenho.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-top-border text-right">
                <h3 class="mb-30">Trabalho</h3>
                <div class="row">
                    <div class="col-md-9">
                        <p class="text-right" align=justify>Muitas pessoas acabam tendo que trabalhar muito cedo para complementar a renda familiar, por conta disso nota-se dificuldade dessas pessoas em conciliar seu trabalho com os estudos e outros alfazeres
                            por estarem extremamente cansados por conta do trabalho. Rotinas como acordar cedo para trabalhar, enfretar diversas dificuldades durante o caminho, e ter um grande expediente de trabalho são a principal causa geradora do cansaço e desmotivação no trabalho.</p>
                        <p class="text-right">Entenda que as pessoas acertam, erram, decepcionam e despertam orgulho. Não exija perfeição no seu trabalho e, acima de tudo, preserve sua saúde mental e fisica.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="../../img/trabalho.jpg" alt="" height="164px" width="250px">
                    </div>
                </div>
            </div>

            <div class="section-top-border">
                <h3 class="mb-30">Gravidez precoce</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="../../img/gravidez_precoce.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 mt-sm-20 left-align-p">
                        <p align=justify>A gravidez na adolescência envolve muito mais do que problemas físicos, pois há também problemas emocionais, sociais, entre outros. Uma jovem de 14 anos, por exemplo, não está preparada mentalmente para cuidar de um bebê, muito menos de uma família. Entretanto, o seu organismo já está preparado para prosseguir com a gestação, já que, a partir do momento da menstruação, a maturidade sexual já está estabelecida. Outra polêmica é o de mães solteiras: por serem muito jovens, os rapazes e as moças não assumem um compromisso sério e, na maioria dos casos, quando surge a gravidez, um dos dois abandona a relação sem se importar com as consequências. Este é apenas um dos motivos que fazem crescer, consideravelmente a cada ano, o número de pais e mães jovens e solteiros.
                        </p>

                        <p align=justify>
                            Estes fatores desmotivam pela grande atenção que um filho exigi, os pais muitas vezes não estão preparados e encontram dificuldades que os desmotivam.
                        </p>
                    </div>
                </div>
            </div>

            <div class="section-top-border">
                <h2 class="mb-30">Como lidar?</h2>
                <div class="row">
                    <div class="col-lg-12 text-black">
                        <blockquote class="generic-blockquote" align=justify>
                            Para lidar como a desmotivação você precisa primeiro assumir que tem um problema para ser resolvido. A negação indica resistência e consequente não resolução do problema.

                            Antes de lhe dar sugestões de mudanças necessárias, é importante entender que as ações precisam partir de você e não de fora.

                            Reconhecer que está deixando de lado coisas importantes que deveriam ser mudadas é o primeiro passo para que as coisas voltem a ser como eram antes e você finalmente consiga se livrar dessa fase de desmotivação.

                            Mas, é claro, nem sempre os motivos que o levam ao desestímulo são internos. Alguns exemplos citados acima demonstram que nem sempre estamos no controle total da situação. Algumas atitudes podem fazer com que um a um desses problemas sejam resolvidos.

                            Após o reconhecimento do problema, aí sim, uma mudança na rotina pode ser a melhor pedida. Trocar de emprego, de curso, ou terminar um relacionamento que já não flui mais, são tarefas muito difíceis para a maioria das pessoas, mas podem ser a libertação necessária.
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start feedback Area -->
        <section class="feedback-area section-gap">
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
                                <p align=justify>
                                    Quem vive só para agradar as pessoas, acaba se tornando um grande colecionador de arrependimentos.
                                </p>
                            </div>
                            <div class="single-feedback-carusel">
                                <img src="../../img/Rick.jpg" height="307px" width="300px" alt="">
                                <div class="title d-flex flex-row">
                                    <h4 class="pb-10">Rick Chesther</h4>

                                </div>
                                <p align=justify>
                                    A vida tem dois lados: o lado do problema e o da solução, e se você não for parte da solução, automaticamente fará parte do problema
                                </p>
                            </div>
                            <div class="single-feedback-carusel">
                                <img src="../../img/Ayrton.jpeg" height="265px" width="280px" alt="">
                                <div class="title d-flex flex-row">
                                    <h4 class="pb-10">Ayrton Senna</h4>

                                </div>
                                <p align=justify>
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