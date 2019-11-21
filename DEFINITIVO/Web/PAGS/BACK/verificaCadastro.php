<?php

include("Conexao.php");
include("Banco.php");
$rm=($_POST['txtRM']);                                                      
$login=($_POST['txtlogin']);    
$senha=($_POST['txtsenha']);
$nome=($_POST['txtnome']);
$sobrenome=($_POST['txtsobrenome']);
$funcao=($_POST['optfuncao']);


if(cadastro($conexao,$rm, $login, $senha, $nome, $sobrenome, $funcao)){
    header("location: ../FRONT/pagLogin.php");
    die();
}
else{
    $msg=mysqli_errno($conexao);
    echo $msg;
}
