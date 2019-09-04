<?php

    include ("Conexao.php");
    include ("Banco.php");
                                                      
if($_POST){
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
        if (login($conexao, $login, $senha)){
            session_start();
            $_SESSION['rm'] = $login;
            $_SESSION['log'] = 'ativo';
            header("location: Inicio.php");
            die();
        }else{
            echo '<br><h1>Email ou Senha invalidos</h1><br><br>'
            . "<a href = 'Login.php'> voltar</a> ";
        }
}
?>