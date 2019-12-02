<?php
include('conexao.php');
include('bancoUsuario.php');
include('bancoAnamnese.php');

$login = 'testi';
$senha = '4967';
$cod = '17308';
$cod_men = '1';

print_r(desenvolvimento($conexao,$cod));



