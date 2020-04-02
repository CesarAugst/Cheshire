<?php

include("Conexao.php");
include("Banco.php");
                                                        
$login=($_POST['txtlogin']);    
$senha=($_POST['txtsenha']);
$nome=($_POST['txtnome']);
$sobrenome=($_POST['txtsobrenome']);
$funcao=($_POST['optfuncao']);
$tel=($_POST['txttel']);
$cel=($_POST['txtcel']);
$end=($_POST['txtend']);

if(cadastro($conexao, $login, $senha, $nome, $sobrenome, $funcao, $tel, $cel, $end)){
    header("location: Login.php");
    die();
}
else{
    $msg=mysqli_errno($conexao);
    echo $msg;
}
