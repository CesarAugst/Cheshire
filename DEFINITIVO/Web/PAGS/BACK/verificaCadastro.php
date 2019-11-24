<?php

include("Conexao.php");
include("BancoUsuario.php");
$erro[0] = "ok";
$_POST['txtRM'] ? $codigo = ($_POST['txtRM']) : $erro[0] = "campos não preenchidos";
$_POST['txtlogin'] ? $login = ($_POST['txtlogin']) : $erro[0] = "campos não preenchidos";
$_POST['txtsenha'] ? $senha = ($_POST['txtsenha']) : $erro[0] = "campos não preenchidos";
$_POST['txtnome'] ? $nome = ($_POST['txtnome']) : $erro[0] = "campos não preenchidos";
$_POST['txtsobrenome'] ? $sobrenome = ($_POST['txtsobrenome']) : $erro[0] = "campos não preenchidos";
$_POST['optfuncao'] ? $tipo = ($_POST['optfuncao']) : $erro[0] = "campos não preenchidos";
//Verifica se todos os campos foram preenchidos
if ($erro[0] == "ok") {
    $permissao = true;
} else {
    echo "campos nao preenchidos";
    echo $erro[0] . "<br>";
}
//Verifica se todos os campos foram preenchidos
//Verifica se o RM é INTEIRO
if (is_numeric($codigo)) {
    $permissao = true;
} else {
    $permissao = false;
    $erro[1] = "RM inválido";
    echo $erro[1] . "<br>";
}
//Verifica se o RM é INTEIRO
//Verifica se o NOME é INTEIRO
if (is_numeric($nome)) {
    $permissao = false;
    $erro[2] = "Nome inválido";
    echo $erro[2] . "<br>";
} else {
    $permissao = true;
}
//Verifica se o NOME é INTEIRO
//Verifica se o SOBRENOME é INTEIRO
if (is_numeric($sobrenome)) {
    $permissao = false;
    $erro[3] = "Sobrenome inválido";
    echo $erro[3] . "<br>";
} else {
    $permissao = true;
}
//Verifica se o SOBRENOME é INTEIRO
//Verifica se o RM e o LOGIN já existem, mas só depois de já terem passado pelos testes acima
if ($permissao == true) {
    $exis_rm = existeRm($conexao, $codigo)['existe'];
    $exis_log = existeLogin($conexao, $login)['existe'];

    //Verifica se o RM digitado já existe
    if ($exis_rm == 1) {
        $permissao = false;
        $erro[4] = "RM já esiste";
        echo $erro[4] . "<br>";
    } else {
        $permissao = true;
    }
    //Verifica se o RM digitado já existe
    //Verifica se o LOGIN digitado já existe
    if ($exis_log == 1) {
        $permissao = false;
        $erro[5] = "LOGIN já esiste";
        echo $erro[5] . "<br>";
    } else {
        $permissao = true;
    }
    //Verifica se o LOGIN digitado já existe
}

//Se tudo estiver OK, ele cadastra
if ($permissao == true) {
    if (efetuarCadastro($conexao, $codigo, $login, $senha, $nome, $sobrenome, $tipo)) {
        header("location: ../FRONT/pagLogin.php");
        die();
    } else {
        $msg = mysqli_errno($conexao);
        echo $msg;
    }
}
    //Se tudo estiver OK, ele cadastra
