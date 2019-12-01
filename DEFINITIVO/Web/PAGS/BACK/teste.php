<?php
include('conexao.php');
include('bancoUsuario.php');
include('bancoMensagem.php');

$cod_mensagem = $_GET['cod_mensagem'];
$mensagem = busca($conexao, $cod_mensagem);
$login = 'testi';
$senha = '4967';
$cod = '17308';
$cod_men = '1';

if(!is_numeric($cod)){
    echo 'sim';
}else{
    echo 'nao';
}

