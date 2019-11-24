<?php
include('conexao.php');
include('bancoUsuario.php');

$login = 'testi';
$senha = '4967';
$cod = '17300';

$exis_rm = existeRm($conexao,$cod)['existe'];
$exis_log = existeLogin($conexao,$login)['existe'];

if($exis_rm == 1){
    echo "ja existe rm" . "<br>";
}else {
    echo "nao existe rm" . "<br>";
}


if($exis_log == 1){
    echo "ja existe login" . "<br>";
}else {
    echo "nao existe login" . "<br>";
}
