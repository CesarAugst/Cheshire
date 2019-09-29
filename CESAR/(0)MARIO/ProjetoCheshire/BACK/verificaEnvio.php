<?php
include("conexao.php");
include("bancoMensagem.php");

$remetente = ($_POST['txtRem']);
$conteudo = ($_POST['txtCon']);
$anonimato = ($_POST['txtAno']);

if (enviar($conexao, $remetente, $conteudo, $anonimato)) {
    echo "mensagem enviada com sucesso!! <br>";
    echo "<a href='../FRONT/pagMsgRecebidas'>Verificar</a>";
}else{
    $msg = mysqli_errno($conexao);
    echo $msg;
    echo "<a href='../FRONT/pagEnviar.php'>Voltar</a>";
}
