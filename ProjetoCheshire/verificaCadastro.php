<?php
include("conexao.php");
include("banco-cliente.php");

$nome = ($_POST['txtnome']);
$tel = ($_POST['txttel']);
$end = ($_POST['txtend']);
$email = ($_POST['txtemail']);
$idade = ($_POST['txtidade']);
$sal = ($_POST['txtsal']);

if (inserir($conexao, $nome, $tel, $end, $email, $idade, $sal)) {
    echo "cliente inserido com sucesso!! <br>";
    echo "<a href='pag_listar_cliente'>Verificar</a>";
}else{
    $msg = mysqli_errno($conexao); // tinha colocado "ã"
    echo $msg;
    echo "<a href='pag_cadastrar_cliente'>Voltar</a>";
}
