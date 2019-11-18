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
    <title>Contato</title>

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
                                <li><a href="pagTranstornoAlimentar.php">Alimentares</a></li>
                                <li><a href="pagBlog-single.html">Psicoses</a></li>
                            </ul>
                        </li>
                        <li><a href="pagDefasagem.php">Defasagem</a></li>
                        <li><a href="pagDesmotivação.php">Desmotivação</a></li>
                        <li><a href="pagProblemasFamiliares.php">Problemas familiares</a></li>
                        <li><a href="pagContato.php">Contato</a></li>
                        <li><a href="pagMenuPrincipal.php">Mensagens</a></li>

                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative contato-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Contato
                    </h1>
                    <p class="text-white link-nav"><a href="pagInicio.php">Inicio </a> <span class="lnr lnr-arrow-right"></span> <a href="pagContato.php"> Contato</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start contact-page Area -->
    <section class="contact-page-area ">
        <div class="container">
            <div class="row section-gap">
                <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>

                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Etec de Cotia</h5>
                            <p>
                                Rua topazio/ Jardim Nomura
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>55 11 4148-2099 ou +55 11 4614-3093</h5>
                            <p>Aberto das 7:00 as 23:00 horas</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>faleconosco@etecdecotia.com.br</h5>
                            <p>Fale conosco através de nosso Email</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3  d-flex flex-column align-items-center address-wrap">
                    <div class="single-contact-address d-flex flex-row align-middle ali">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Caps psicossocial</h5>
                            <p>
                                Rua João Nishimura, 50 - Vila Santo Antonio do Portao
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>(11) 4148-5674</h5>
                            <p>Aberto das 8:00 as 17:00 horas</p>
                        </div>
                    </div>


                </div>


                <div class="col-lg-3 left-align d-flex flex-column align-items-center address-wrap">
                    <div class="single-contact-address d-flex flex-row align-middle ali">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Caps alcoól e drogas</h5>
                            <p>
                                Rua Adolfo Eugênio Barsotine, 140 - Vila Santo Antonio
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>(11) 4616-3889</h5>
                            <p>Aberto das 8:00 as 17:00 horas</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        </div>
        </div>
    </section>
    <!-- End contact-page Area -->

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

    <!-- Mapa com Funções -->
    <div id="mapa"> </div>
    <script async="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA&callback=initMap"></script>
    <script>
        function initMap() {

            var coordenadas = new google.maps.LatLng(-23.605167, -46.913035);
            var coordenadas2 = new google.maps.LatLng(-23.602031, -46.908571);
            var coordenadas3 = new google.maps.LatLng(-23.603826, -46.910426);

            var posicao = {
                zoom: 15,
                center: coordenadas
            }
            var map = new google.maps.Map(document.getElementById('map'), posicao);


            var marcador = new google.maps.Marker({
                position: coordenadas,
                map: map,
                title: 'Etec de cotia'

            });

            var marcador2 = new google.maps.Marker({
                position: coordenadas2,
                map: map,
                title: 'CAPS alcoól e drogas'
            });

            var marcador3 = new google.maps.Marker({
                position: coordenadas3,
                map: map,
                title: 'CAPS psicossocial'
            });
        }
    </script>
    <!-- Fim Mapa -->


    <script src="../../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/vendor/bootstrap.min.js"></script>
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