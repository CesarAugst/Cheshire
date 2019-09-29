<?php
include("conexao.php");
include("bancoMensagem.php");
$cod_mensagem = $_POST['txtcod'];
$remetente = $_POST['txtRem'];
$destinatario = $_POST['txtDes'];
$conteudo = $_POST['txtCon'];
$anonimato = $_POST['txtAno'];

if (alterar($conexao, $remetente, $destinatario, $conteudo, $anonimato, $cod_mensagem)){
    echo "Mensagem Alterada com sucesso!";
    header("location: ../FRONT/pagMsgRecebidas.php");
    
    die();
}else{
    $msg = mysqli_errno($conexao);
    echo $msg;
}
