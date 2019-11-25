<?php
include("conexao.php");
include("bancoMensagem.php");

$cod_mensagem=$_GET['cod_mensagem'];
if(excluirRemetente($conexao, $cod_mensagem)) {
    header("Location: ../FRONT/pagCaixaMsgEnv.php");
    die();
}

