<?php

function efetuarLogin($conexao,$user,$senha){
    $sql = "select * from tblRegistro where identificador='{$user}'"
            . "and cpf='{$senha}'";
$resultado = mysqli_query($conexao, $sql);

return mysqli_fetch_assoc($resultado);
}