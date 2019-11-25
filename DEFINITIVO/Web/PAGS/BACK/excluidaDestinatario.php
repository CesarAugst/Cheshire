<?php
include("conexao.php");
include("bancoMensagem.php");

$cod_mensagem=$_GET['cod_mensagem'];
if(excluirDestinatario($conexao, $cod_mensagem)) {
    header("Location: ../FRONT/pagMsgLida.php");
    die();
}

