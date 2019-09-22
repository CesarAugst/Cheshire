<?php
    function inserir($conexao, $remetente, $conteudo, $anonimato) {
        $sql = "insert into mensagem values (default,'$remetente', default, '$conteudo', '$anonimato', default);";
        return mysqli_query($conexao, $sql);
    }
    
    function alterar($conexao, $remetente, $destinatario, $conteudo, $anonimato, $cod_mensagem){
        $sql = "update mensagem set remetente='$remetente',"
                . "destinatario='$destinatario',"
                . "conteudo='$conteudo',"
                . "data = default, "
                . "anonimato='$anonimato' where cod_mensagem=$cod_mensagem";
        return mysqli_query($conexao, $sql);
    }
    
    function excluir($conexao, $cod_cliente) {
        $sql = "delete from cliente where cod_cliente = $cod_cliente";
        return mysqli_query($conexao,$sql);
    }
    
    function listaMensagens($conexao) {
        $mensagens = array();
        $resultado = mysqli_query($conexao, "select * from mensagem");
        
        while ($mensagem = mysqli_fetch_assoc($resultado)) {
            array_push($mensagens, $mensagem);
        }
        return $mensagens;
    }
    
    function busca($conexao, $cod_mensagem) {
        $resultado = mysqli_query($conexao,
                "select * from mensagem where cod_mensagem=$cod_mensagem");
        return mysqli_fetch_assoc($resultado);
    }
    

