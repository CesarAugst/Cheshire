<?php
include('conexao.php');
include('bancoUsuario.php');

$login = 'testi';
$senha = '4967';
$cod = '17300';

var_dump(efetuarLogin($conexao,$login,$senha));
