<?php
include("conexao.php");
include("bancoMensagem.php");
$cod_mensagem = $_POST['txtcod'];
$remetente = $_POST['txtnome'];
$destinatario = $_POST['txttel'];
$conteudo = $_POST['txtend'];
$anonimato = $_POST['txtemail'];

if (alterar($conexao, $remetente, $destinatario, $conteudo, $anonimato, $cod_mensagem)){
    echo "Cliente Alterado com sucesso!";
    header("location: pag_listar_cliente.php");
    
    die();
}else{
    $msg = mysqli_errno($conexao);
    echo $msg;
}
