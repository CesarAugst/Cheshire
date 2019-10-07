<?php
include('../BACK/bancoUsuario.php');
include('../BACK/conexao.php');
session_start();
print_r(buscaRm($conexao, 17308, 42942544830)['cod_usuario']);
$_SESSION['nome'] = (buscaNome($conexao, $_SESSION['rm'])['nome']);
print_r(buscaTipo($conexao, $_SESSION['rm'])['tipo']);
print_r($_SESSION['nome']);
