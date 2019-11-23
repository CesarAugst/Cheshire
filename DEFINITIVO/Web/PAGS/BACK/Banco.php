<?php
    function login($conexao,$login,$senha){
         $sql = "select * from tblRegistro where login='$login'"
        ."and senha='$senha'";
        $resultado= mysqli_query($conexao, $sql);
        return mysqli_fetch_assoc($resultado);
    }
    
    function cadastro($conexao,$codigo,$login,$senha,$nome,$sobrenome,$tipo ){
        $sql = "insert into usuario"
                ."(cod_usuario,login, senha, nome, sobrenome, tipo)"
                ."values ('$codigo','$login', '$senha', '$nome', '$sobrenome', '$tipo')";
        
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

