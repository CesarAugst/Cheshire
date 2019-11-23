<?php

include("Conexao.php");
include("Banco.php");
$codigo=($_POST['txtRM']);                                                      
$login=($_POST['txtlogin']);    
$senha=($_POST['txtsenha']);
$nome=($_POST['txtnome']);
$sobrenome=($_POST['txtsobrenome']);
$tipo=($_POST['optfuncao']);


if(cadastro($conexao,$codigo, $login, $senha, $nome, $sobrenome, $tipo)){
    header("location: ../FRONT/pagLogin.php");
    die();
}
else{
    $msg=mysqli_errno($conexao);
    echo $msg;
}
