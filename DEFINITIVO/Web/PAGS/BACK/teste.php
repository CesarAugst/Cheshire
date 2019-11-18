<?php
include('conexao.php');
include('bancoUsuario.php');

$rm = buscaRm($conexao,'logando','senhando');
$nome = buscaNome($conexao,$rm['cod_rm']);

var_dump($rm['cod_rm']);
var_dump($nome['nome']);
