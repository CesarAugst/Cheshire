<?php
include("conexao.php");
include("bancoMensagem.php");

$cod_mensagem=$_GET['cod_mensagem'];
if(excluir($conexao, $cod_mensagem)) {
    header("Location: pagMsgLida.php");
    die();
}

