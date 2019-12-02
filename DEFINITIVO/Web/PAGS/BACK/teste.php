<?php
include('conexao.php');
include('bancoUsuario.php');
include('bancoAnamnese.php');

$login = 'testi';
$senha = '4967';
$cod = '17308';
$cod_men = '1';

print_r(d_mae($conexao,d_familiar($conexao,$cod)['dados_mae_fk'])['nome_mae']);



