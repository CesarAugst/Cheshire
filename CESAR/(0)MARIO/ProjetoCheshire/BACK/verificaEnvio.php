<?php
session_start();
include("conexao.php");
include("bancoMensagem.php");

if ($_SESSION['tipo'] == 'orientador') $destinatario = ($_POST['txtDes']);
$remetente = ($_POST['txtRem']);
$conteudo = ($_POST['txtCon']);
$anonimato = ($_POST['txtAno']);

if ($_SESSION['tipo'] == 'orientador') {
    if (enviarOrientador($conexao, $destinatario, $remetente, $conteudo)) {
        echo "mensagem enviada com sucesso!! <br>";
        echo "<a href='../FRONT/pagCaixaMsg.php'>Verificar</a>";
    } else {
        $msg = mysqli_errno($conexao);
        echo $msg;
        echo "<a href='../FRONT/pagEnviar.php'>Voltar</a>";
    }
} else {
    if (enviarComum($conexao, $remetente, $conteudo, $anonimato)) {
        echo "mensagem enviada com sucesso!! <br>";
        echo "<a href='../FRONT/pagCaixaMsg'>Verificar</a>";
    } else {
        $msg = mysqli_errno($conexao);
        echo $msg;
        echo "<a href='../FRONT/pagEnviar.php'>Voltar</a>";
    }
}
