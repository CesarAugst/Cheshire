<?php
// -- index -- //

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

// -- anamnese -- //
function nascimento($conexao,$rm) {
    $sql = "select dt_nascimento from REGISTRO where id_registro = (select registro_fk from PESSOA where rm = '$rm')";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function cpf($conexao,$rm) {
    $sql = "select cpf from IDENTIFICACAO_ALUNO where rm = '$rm'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function cep($conexao,$rm) {
    $sql = "select cep from ENDERECO where id_endereco = (select endereco_fk from PESSOA where rm = '$rm')";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function logradouro($conexao,$rm) {
    $sql = "select lograduro from ENDERECO where id_endereco = (select endereco_fk from PESSOA where rm = '$rm')";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function numero($conexao,$rm) {
    $sql = "select numero from ENDERECO where id_endereco = (select endereco_fk from PESSOA where rm = '$rm')";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function bairro($conexao,$rm) {
    $sql = "select bairro from ENDERECO where id_endereco = (select endereco_fk from PESSOA where rm = '$rm')";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function cidade($conexao,$rm) {
    $sql = "select cidade from ENDERECO where id_endereco = (select endereco_fk from PESSOA where rm = '$rm')";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function estado($conexao,$rm) {
    $sql = "select estado from ENDERECO where id_endereco = (select endereco_fk from PESSOA where rm = '$rm')";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

// -- familia -- //
function d_familiar($conexao,$rm) {
    $sql = "select * from DADOS_FAMILIARES where id_familiar = (select dados_familiares_fk from anamnese where id_anamnese = (select anamnese_fk from pessoa where rm = '$rm'))";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function d_mae($conexao,$id) {
    $sql = "select * from dados_mae where id_mae = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function contato_mae($conexao,$id) {
    $sql = "select * from telefone where id_telefone = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function endereco_mae($conexao,$id) {
    $sql = "select * from endereco where id_endereco = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function d_pai($conexao,$id) {
    $sql = "select * from dados_pai where id_mae = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function contato_pai($conexao,$id) {
    $sql = "select * from telefone where id_telefone = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function endereco_pai($conexao,$id) {
    $sql = "select * from endereco where id_endereco = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function d_res($conexao,$id) {
    $sql = "select * from dados_responsavel where id_responsavel = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function contato_res($conexao,$id) {
    $sql = "select * from telefone where id_telefone = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
function endereco_res($conexao,$id) {
    $sql = "select * from endereco where id_endereco = $id";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

// -- saude -- //
function saude($conexao,$rm) {
    $sql = "select * from HISTORICO_SAUDE where id_historico_saude = (select historico_saude_fk from anamnese where id_anamnese = (select anamnese_fk from pessoa where rm = '$rm'))";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

// -- desenvolvimento -- //
function desenvolvimento($conexao,$rm) {
    $sql = "select * from DESENVOLVIMENTO where id_desenvolvimento = (select desenvolvimento_fk from anamnese where id_anamnese = (select anamnese_fk from pessoa where rm = '$rm'))";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

// -- escolarizacao -- //
function escolarizacao($conexao,$rm) {
    $sql = "select * from ESCOLARIZACAO where id_escolarizacao = (select escolarizacao_fk from anamnese where id_anamnese = (select anamnese_fk from pessoa where rm = '$rm'))";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}