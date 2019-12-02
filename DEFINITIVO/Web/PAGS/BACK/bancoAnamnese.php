<?php
// -- Desenvolvimento -- //

function nome($conexao,$rm) {
    $sql = "select nome from IDENTIFICACAO_ALUNO where rm = '$rm'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function snome($conexao,$rm) {
    $sql = "select sobrenome from IDENTIFICACAO_ALUNO where rm = '$rm'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function idade($conexao,$rm) {
    $sql = "select TIMESTAMPDIFF(YEAR, (select dt_nascimento from REGISTRO where id_registro = (select registro_fk from PESSOA where rm = '$rm')), now()) as idade";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function sexo($conexao,$rm) {
    $sql = "select sexo from IDENTIFICACAO_ALUNO where rm = '$rm'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function celular($conexao,$rm) {
    $sql = "select * from TELEFONE where pessoa_fk = '$rm'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function email($conexao,$rm) {
    $sql = "select endereco from EMAIL where pessoa_fk = '$rm'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function naturalidade($conexao,$rm) {
    $sql = "select naturalidade from IDENTIFICACAO_ALUNO where rm = '$rm'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}


