<?php

function efetuarLogin($conexao,$user,$senha){
    $sql = "call LOGIN('{$user}','{$senha}');";
    //$sql = "select * from usuario where user='{$user}'"
    //        . "and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}

function buscaRm($conexao, $user,$senha) {

    $sql = "select rm from PESSOA where login_fk= (select id_login from LOGIN where login= '$user' && senha= '$senha')";

    //$sql = "call RM('$user','$senha');";
    // $sql = "select cod_usuario from usuario where user='{$user}'"
    // . "and senha='{$senha}'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

function buscaNome($conexao, $cod) {
    $sql = "select r.nome from REGISTRO as r join PESSOA as p on p.registro_fk = r.id_registro where p.rm = $cod";
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