<?php
include ('conexao.php');


if (!$conexao) {
    echo "Não foi possivel conectar ao banco";
    exit;
}else{
    echo "Conexao criada com sucesso";
}