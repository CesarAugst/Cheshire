<?php

function efetuarLogin($conexao,$user,$senha){
    $sql = "select LOGINf('{$user}','{$senha}') as possui";
    //$sql = "select * from usuario where user='{$user}'"
    //        . "and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}

function existeRm($conexao,$codigo){
    $sql = "select VALIDA_RM($codigo) as existe";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}

function existeLogin($conexao,$login){
    $sql = "select VALIDA_LOG('$login') as existe";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}

function efetuarCadastro($conexao,$codigo,$login,$senha,$nome,$sobrenome,$tipo ){
    $sql = "call CADASTRO($codigo,'$login','$senha','$nome','$sobrenome','$tipo')";
    // $sql = "insert into usuario"
    //         ."(cod_usuario,login, senha, nome, sobrenome, tipo)"
    //         ."values ('$codigo','$login', '$senha', '$nome', '$sobrenome', '$tipo')";
    
    return mysqli_query($conexao, $sql);
}

function buscaRm($conexao, $user,$senha) {

    $sql= "select RMf('$user','$senha') as rm";
    //$sql = "select rm from PESSOA where login_fk= (select id_login from LOGIN where login= '$user' && senha= '$senha')";
    //$sql = "call RM('$user','$senha');";
    // $sql = "select cod_usuario from usuario where user='{$user}'"
    // . "and senha='{$senha}'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

function buscaNome($conexao, $cod) {
    
    $sql = "select NOMEf($cod) as nome";
    //$sql = "select r.nome from REGISTRO as r join PESSOA as p on p.registro_fk = r.id_registro where p.rm = $cod";
    //$sql = "call NOME('$cod');";
    // $sql = "select nome from usuario where cod_usuario ='{$cod}'";
    $resultado = mysqli_query($conexao,$sql);
    
    return mysqli_fetch_assoc($resultado);
}

function buscaTipo($conexao, $cod) {
    $sql = "select tipo from TIPO_USUARIO as t join PESSOA as p on p.tipo_fk = t.id_tipo where p.rm = $cod";
    //$sql = "select tipo from usuario where cod_usuario = '{$cod}'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

function validaSenha($senhaPassada){
$senha = $senhaPassada;
$hard = 0;
if(preg_match('/(.*)?([!-//]|[:-@]|[^-`]|~)(.*)?/', $senha)){
    $hard ++;
}
if(preg_match('1234567890', $senha)){
    $hard++;
}
return $hard;
}