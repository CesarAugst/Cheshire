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
    <link rel="stylesheet" type="text/css" href="meuCss/estiloso.css">
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
                    <a href="pagInicio.php"><img src="../../img/cheshire1.png" width="100px" height="70px" alt="" title="" /></a>
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


    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container section-gap">
            <div class="section-top-border2 ">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title">
                            <h2 class="mb-10" align=justify>"Ser ruim na escola e ter notas baixas, não te fazem um burro. Você não esta na escola porque ama ela, está por obrigação, tudo que somos obrigados á fazer, não fazemos por prazer. Se você não ama matemática, você nunca será um gênio da matemática..."</h2>
                            <p align="right">Lolla Carolina</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 accordion-left">

                        <!-- accordion 2 start-->
                        <dl class="accordion">
                            <dt>
                                <a href="">Fragilidade da escola</a>
                            </dt>
                            <dd align=justify>
                            Uma instituição que não passa por avaliações frequentes pode deixar de oferecer um ensino de qualidade. Quando os valores e conhecimentos não são passados de forma adequada para os educadores, casos de fracasso escolar se tornam mais comuns.
                            </dd>
                            <dt>
                                <a href="">Material didático</a>
                            </dt>
                            <dd>
                            As dificuldades de aprendizado podem ser decorrentes da maneira como o material didático é distribuído. Ainda que os professores tenham um bom método de ensino, a falta de um bom material escolar pode acarretar em dificuldade de absorção para os alunos.
                            </dd>
                            <dt>
                                <a href="">Corpo docente</a>
                            </dt>
                            <dd>
                              Os professores são elementos fundamentais para o aprendizado e desenvolvimento do aluno. Se os educadores não se sentirem motivados e inspirados a dar aula, a turma também não demonstrará vontade de aprender.
                            </dd>

                        </dl>
                        <!-- accordion 2 end-->
                    </div>
                    <div class="col-md-6 video-defasagem justify-content-center align-items-center d-flex relative ">
                        <div class="overlay overlay-bg"></div>
                        <a class="play-btn" href="https://www.youtube.com/watch?v=yW0Jn5eUP2c"><img class="img- mx-auto" src="../../img/about/play.png" alt=""></a>
                    </div>
                </div>
            </div>

            <!-- Start Sample Area -->
            <center>
                <section class="sample-text-area section-top-border">
                    <div class="container">
                        <div class="align-items-center ">
                            <div class="col-lg-8 offered-area text-black">

                                <h1>Problemas na defasagem escolar</h1>
                                <p>
                                    <dd align=justify>O aluno que apresenta defasagem escolar deve ser orientado pelo orientador educacional para aproveitar da melhor maneira possível suas habilidades, promovendo um autoconhecimento que lhe favoreça em determinada área de sua escolha, uma vez que o aluno pode não ser bom em um determinado ramo específico, mas pode ser melhor em outro.
                                        Segundo estudo um levantamento de dados realizado pelo INEP em 2017, o número de alunos que demonstravam um nível de conhecimento didático incompativelmente inferior ao esperado pela sua idade (defasagem escolar) em 2017 ensino médio chegava a 28%.
                                    </dd>
                                </p>
                                <img class="img pt-10 pb-10" src="../../img/defasagem_grafico.jpg" alt="">
                                <p align=justify>
                                    A aplicação proposta pelo projeto propõe uma forma de acompanhamento online de uma planilha de estudos que é desenvolvida pelo orientador juntamente do aluno, onde antes havia um acompanhamento quinzenal ou semanal passa a ser em tempo real, para assim planejarem juntos uma forma de aprimorar o processo de aprendizagem do docente e reduzir esse nível de defasagem.</h5>
                                </p>

                            </div>
                        </div>
                </section>
            </center>


            <div class="section-top-border">
                <h2 class="mb-30">Consequências da defasagem escolar:</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Notas baixas</h4>
                            <p align=justify>Queda no rendimento é o primeiro sinal de alerta, quando um aluno começa a apresentar um quadro de fracasso escolar. Nesse ponto, os professores e os pais podem intervir com mais facilidade e encontrar os problemas que estão causando as notas ruins.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Reprovação</h4>
                            <p align=justify>Quando o aluno é reprovado, significa que os primeiros sinais passaram despercebidos ou que pouco foi feito para ajudá-lo. A reprovação pode significar um novo começo. Dar atenção para as necessidades do aluno é fundamental nessa etapa.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Abandono escolar</h4>
                            <p align=justify>O caso mais grave de fracasso escolar é quando o aluno desiste dos estudos. Isso pode ocorrer por diversos motivos, desde problemas pessoais e familiares, até a falta de vontade de seguir em frente. Passando pelas etapas de notas baixas e reprovação, o aluno pode se sentir desmotivado a continuar estudando e, com isso, abandonar a escola. Para que tal fato não ocorra, tanto os pais, quanto professores devem estar atentos ao estudante, buscando soluções.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-top-border">
                <h2 class="mb-30">Como o professor pode ajudar a evitar evasão escolar:</h2>
                <div class="row">
                    <div class="col-lg-12 text-black">
                        <blockquote class="generic-blockquote" align=justify>
                        Evasão escolar é o ato de deixar de frequentar as aulas, ou seja, abandonar o ensino em decorrência de qualquer motivo.

Esse problema social que, infelizmente, é comum no Brasil, afeta principalmente os alunos do Ensino Médio.

De acordo com um estudo do Fundo das Nações Unidas pela Infância e Adolescência (Unicef), existem hoje no país 2,8 milhões de crianças e adolescentes fora da escola. Isso nos faz questionar muitos aspectos da educação brasileira: a qualidade do ensino, o papel do professor e os conteúdos da Educação Básica brasileira. Afinal, a educação é a base comum da inclusão social e do êxito de um indivíduo em sociedade.

Várias podem ser as razões da evasão escolar: pobreza, violência, gravidez, acesso limitado, qualidade da educação, clima escolar, mercado de trabalho, atividades ilegais… Um estudante que abandonou a escola é, na maioria das vezes, um estudante cujo desempenho acadêmico, formação acadêmica ou perspectiva de ter e construir uma vida ativa não é intelectualmente interessante. Tudo isso leva ao abandono escolar, mas também e especialmente a um declínio na autoestima, uma grande dificuldade em medir as suas habilidades e uma visão pessimista e fatalista de sua vida.

O professor deve ser um aliado nesse processo, contribuindo para que o aluno não seja levado ao abandono escolar, melhorando sua autoestima, refinando suas habilidades e apostando nas futuras perspectivas. Porque sim, um aluno que abandonou a escola não pode ser esquecido; é preciso resgatá-lo e reinseri-lo no ambiente escolar por meio de uma estratégia que combine vários fatores.
                        </blockquote>
                    </div>
                </div>
            </div>



        </div>

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