<?php
    function login($conexao,$login,$senha){
         $sql = "select * from tblRegistro where login='$login'"
        ."and senha='$senha'";
        $resultado= mysqli_query($conexao, $sql);
        return mysqli_fetch_assoc($resultado);
    }
    
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
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

