<?php
include('conexao.php');
include('bancoUsuario.php');

$login = 'testi';
$senha = '4967';
$cod = '17308';

var_dump(buscaTipo($conexao,$cod));
