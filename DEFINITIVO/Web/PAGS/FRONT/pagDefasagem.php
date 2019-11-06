<!DOCTYPE html>

<?php
session_start();
if ($_SESSION['log'] != 'ativo') {
    session_destroy();
    header("location: pagLogin.php");
}
?>
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
    <title>Defasagem</title>

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
                    <a href="pagInicio.php"><img src="../../img/cheshire1.png" width="100px" height="70px" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-has-children"><a href="">Transtornos</a>
                            <ul>
                                <li><a href="pagTranstornoEmocional.php">Emocionais</a></li>
                                <li><a href="blog-single.html">Alimentares</a></li>
                                <li><a href="blog-single.html">Psicoses</a></li>
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
    <section class="banner-area relative defasagem-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Defasagem
                    </h1>

                    </h1>
                    <p class="text-white link-nav"><a href="pagInicio.php">Inicio </a> <span class="lnr lnr-arrow-right"></span> <a href="pagDefasagem.php"> Defasagem</a></p>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start offered-service Area -->
    <section class="offered-service-area dep-offred-service">
        <div class="container">
            <div class="row offred-wrap section-gap">
                <div class="col-lg-8 offered-area text-black">
                    <center><h1>Problemas na defasagem escolar</h1>
                    <p>
                        <dd>O aluno que apresenta defasagem escolar deve ser orientado pelo orientador educacional para aproveitar da melhor maneira possível suas habilidades, promovendo um autoconhecimento que lhe favoreça em determinada área de sua escolha, uma vez que o aluno pode não ser bom em um determinado ramo específico, mas pode ser melhor em outro.
                            Segundo estudo um levantamento de dados realizado pelo INEP em 2017, o número de alunos que demonstravam um nível de conhecimento didático incompativelmente inferior ao esperado pela sua idade (defasagem escolar) em 2017 ensino médio chegava a 28%.
                        </dd>
                    </p>
                    <img class="img pt-10 pb-10" src="../../img/defasagem_grafico.jpg" alt="">
                    <p>
                        A aplicação proposta pelo projeto propõe uma forma de acompanhamento online de uma planilha de estudos que é desenvolvida pelo orientador juntamente do aluno, onde antes havia um acompanhamento quinzenal ou semanal passa a ser em tempo real, para assim planejarem juntos uma forma de aprimorar o processo de aprendizagem do docente e reduzir esse nível de defasagem.</h5>
                    </p>
                    </center>
                </div>
    </section>
    <!-- End offered-service Area -->

    <!-- Start team Area -->
    <section class="team-area pt-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-7">

                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">





            </div>
        </div>
    </section>
    <!-- End team Area -->



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