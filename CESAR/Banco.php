<?php
    function login($conexao,$login,$senha){
         $sql = "select * from tblLogin where usuario='$login'"
        ."and senha='$senha'";
        $resultado= mysqli_query($conexao, $sql);
        return mysqli_fetch_assoc($resultado);
    }
/* 
    function cadastro($conexao,$login,$senha,$nome,$sobrenome,$funcao,$tel,$cel,$end ){
        $sql = "insert into tblRegistro"
                ."(login, senha, nome, sobrenome, funcao, telefone, celular, endereco)"
                ."values ('$login', '$senha', '$nome', '$sobrenome', '$funcao', '$tel', '$cel','$end' )";
        
        return mysqli_query($conexao, $sql);
    }
    
    function usuario($conexao,$nome){
        $sql = "select nome from tblRegistro where login = '$login'";
        $resultado = mysqli_query($conexao, $sql);
        return mysql_fetch_assoc($resultado);
    }
 */

