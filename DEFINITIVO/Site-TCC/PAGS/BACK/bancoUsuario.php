<?php

function efetuarLogin($conexao,$user,$senha){
    $sql = "select * from usuario where login='{$user}'"
            . "and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $sql);
return mysqli_fetch_assoc($resultado);
}

function cadastro($conexao,$rm,$login,$senha,$nome,$sobrenome,$tipo,$tel,$cel,$end ){
    $sql = "insert into tblRegistro"
            ."values ('$rm','$login', '$senha', '$nome', '$sobrenome', '$tipo', '$tel', '$cel','$end' )"; 
    return mysqli_query($conexao, $sql);
}

function buscaRm($conexao, $user,$senha) {
    $sql = "select cod_usuario from usuario where user='{$user}'"
    . "and senha='{$senha}'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

function buscaNome($conexao, $cod) {
    $sql = "select nome from usuario where cod_usuario ='{$cod}'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

function buscaTipo($conexao, $cod) {
    $sql = "select tipo from usuario where cod_usuario = '{$cod}'";
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

// function usuario($conexao,$nome){
//     $sql = "select nome from tblRegistro where login = '$login'";
//     $resultado = mysqli_query($conexao, $sql);
//     return mysql_fetch_assoc($resultado);
// } Estava no do henrique, so copiei antes de excluir para ter certeza
}