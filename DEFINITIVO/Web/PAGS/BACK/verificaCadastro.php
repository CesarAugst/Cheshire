<?php

include("Conexao.php");
include("BancoUsuario.php");
$permissao = 0;
$_POST['txtRM'] ? $codigo = ($_POST['txtRM']) : $permissao++;
$_POST['txtlogin'] ? $login = ($_POST['txtlogin']) : $permissao++;
$_POST['txtsenha'] ? $senha = ($_POST['txtsenha']) : $permissao++;
$_POST['txtnome'] ? $nome = ($_POST['txtnome']) : $permissao++;
$_POST['txtsobrenome'] ? $sobrenome = ($_POST['txtsobrenome']) : $permissao++;
$_POST['optfuncao'] ? $tipo = ($_POST['optfuncao']) : $permissao++;


//Verifica se todos os campos foram preenchidos
if ($permissao > 0) {
    echo "campos nao preenchidos";
}

//Verifica se todos os campos foram preenchidos

if ($permissao == 0) {
    //Verifica se o RM é INTEIRO
    if (!is_numeric($codigo)) {
        echo "RM inválido";
        $permissao++;
    }
    //Verifica se o RM é INTEIRO

    //Verifica se o NOME é INTEIRO
    if (is_numeric($nome)) {
        echo "Nome inválido<br>";
        $permissao++;
    }
    //Verifica se o NOME é INTEIRO

    //Verifica se o SOBRENOME é INTEIRO
    if (is_numeric($sobrenome)) {
        echo "Sobrenome inválido<br>";
        $permissao++;
    }
    //Verifica se o SOBRENOME é INTEIRO
    
    //Verifica se o RM e o LOGIN já existem, mas só depois de já terem passado pelos testes acima
    if ($permissao == 0) {
        $exis_rm = existeRm($conexao, $codigo)['existe'];
        $exis_log = existeLogin($conexao, $login)['existe'];

        //Verifica se o RM digitado já existe
        if ($exis_rm == 1) {
            echo "RM já esiste<br>";
            $permissao++;
        }
        //Verifica se o RM digitado já existe

        //Verifica se o LOGIN digitado já existe
        if ($exis_log == 1) {
            echo "LOGIN já esiste<br>";
            $permissao++;
        }
        //Verifica se o LOGIN digitado já existe
    }

    //Se tudo estiver OK, ele cadastra
    if ($permissao == 0) {
        if (efetuarCadastro($conexao, $codigo, $login, $senha, $nome, $sobrenome, $tipo)) {
            header("location: ../FRONT/pagLogin.php");
            die();
        } else {
            $msg = mysqli_errno($conexao);
            echo $msg;
        }
    }
}
    //Se tudo estiver OK, ele cadastra
