<?php

function efetuarLogin($conexao,$user,$senha){
    $sql = "select * from usuario where user='{$user}'"
            . "and senha='{$senha}'";
$resultado = mysqli_query($conexao, $sql);

return mysqli_fetch_assoc($resultado);
}