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

var_dump($mensagem);
var_dump($mensagem['remetente_fk']);

