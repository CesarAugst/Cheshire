<?php
include("conexao.php");
include("banco-mensagem.php");

$remetente = ($_POST['txtRem']);
$destinatario = ($_POST['txtDes']);
$conteudo = ($_POST['txtCon']);
$anonimato = ($_POST['txtAno']);

if (inserir($conexao, $remetente, $destinataio, $conteudo, $anonimato)) {
    echo "mensagem enviada com sucesso!! <br>";
    echo "<a href='pag_listar_cliente'>Verificar</a>";
}else{
    $msg = mysqli_errno($conexao);
    echo $msg;
    echo "<a href='pag_cadastrar_cliente'>Voltar</a>";
}
