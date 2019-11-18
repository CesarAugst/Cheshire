<?php

    include ("conexao.php");
    include ("bancoUsuario.php");
                                                      
if($_POST){
$login = $_POST['txtlogin'];
$senha = $_POST['txtsenha'];
if (efetuarLogin($conexao, $login, $senha)){
session_start();

$rm = buscaRm($conexao, $login, $senha);
$nome = buscaNome($conexao,$rm['cod_rm']);

$_SESSION['rm'] = $rm['cod_rm'];
$_SESSION['nome'] = $nome['nome'];
$_SESSION['log'] = 'ativo';
header("location: ../FRONT/pagInicio.php");
die();
                                                           
}
else{
echo '<br><h1>Email ou Senha invalidos</h1><br><br>'
. "<a href = '../FRONT/pagLogin.php'> voltar</a> ";
}
}
?>