<?php

include("Conexao.php");
include("Banco.php");
                                                        
$login=($_POST['txtlogin']);    
$senha=($_POST['txtsenha']);

if(cadastro($conexao, $login, $senha)){
    header("location: Login.php");
    die();
}else{
    $msg=mysqli_errno($conexao);
    echo $msg;
}
