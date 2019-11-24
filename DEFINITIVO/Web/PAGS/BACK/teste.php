<?php
include('conexao.php');
include('bancoUsuario.php');

$login = 'teste';
$senha = '4967';
$cod = buscaRm($conexao,$login,$senha)['rm'];


print_r(buscaRm($conexao,$login,$senha));
print_r(buscaNome($conexao,$cod)['nome']);


