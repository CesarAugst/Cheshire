<?php
    include ("conexao.php");
    include ("bancoUsuario.php");
                                                      
    if($_POST){
        $login = $_POST['txtlogin'];
        $senha = $_POST['txtsenha'];
        session_start();
        $_SESSION['rm'] = buscaRm($conexao,$login,$senha)['rm'];
        $_SESSION['nome'] = buscaNome($conexao,$_SESSION['rm'])['nome'];
        $_SESSION['tipo'] = buscaTipo($conexao,$_SESSION['rm'])['tipo'];
        if (efetuarLogin($conexao, $login, $senha)){

            $_SESSION['log'] = 'ativo';
            header("location: ../FRONT/pagInicio.php");
            die();
                                                           
        }else{
            echo '<br><h1>Email ou Senha invalidos</h1><br><br>'
            . "<a href = '../FRONT/pagLogin.php'> voltar</a> ";
        }
    }
?>