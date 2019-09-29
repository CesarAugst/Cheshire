<?php
include("conexao.php");
include("bancoMensagem.php");

$cod_mensagem=$_GET['cod_mensagem'];
if(ler($conexao, $cod_mensagem)) {
    header("Location: ../FRONT/pagCaixaEntrada.php");
    die();
}

