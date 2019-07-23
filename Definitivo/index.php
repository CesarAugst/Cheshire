<?php
/* Define a página atual pela URL */
$pagina = 'inicio';

if(isset($_GET['i'])){
    $pagina = $_GET['i'];
}

/* Carrega o header.php */
include 'pags/front/cabecalho/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'inicio':
    include 'pags/front/corpo/inicio.php';
    break;

    case 'login':
    include 'pags/front/corpo/login.php';
    break;

    case 'features':
    include 'pags/front/corpo/features.html';
    break;

    case 'elements':
    include 'pags/front/corpo/elements.html';
    break;

    case 'doctors':
    include 'pags/front/corpo/doctors.html';
    break;

    case 'departments':
    include 'pags/front/corpo/departments.html';
    break;

    case 'defasagem':
    include 'pags/front/corpo/defasagem.php';
    break;

    case 'contact':
    include 'pags/front/corpo/contact.html';
    break;

    case 'blog-single':
    include 'pags/front/corpo/blog-single.html';
    break;

    case 'about':
    include 'pags/front/corpo/about.html';
    break;

    default:
    include 'pags/front/corpo/cadastro.php';
    break;
}
/* Carrega o footer.php */
include 'pags/front/rodape/footer.php';
