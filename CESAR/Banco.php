<?php
    function login($conexao,$login,$senha){
         $sql = "select * from tblLogin where usuario='$login'"
        ."and senha='$senha'";
        $resultado= mysqli_query($conexao, $sql);
        return mysqli_fetch_assoc($resultado);
    }
 
    function cadastro($conexao,$login,$senha){
        $sql = "insert into tblLogin values (default,'$login', '$senha')";
        
        return mysqli_query($conexao, $sql);
    }

