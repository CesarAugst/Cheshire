<?php
    function inserir($conexao, $remetente, $destinatario, $conteudo, $anonimato) {
        $sql = "insert into mensagem values ('default,'$remetente', '$destinatario', '$conteudo', '$anonimato', default)";
        return mysqli_query($conexao, $sql);
    }
    
    function alterar($conexao, $remetente, $destinatario, $conteudo, $anonimato, $cod_mensagem){
        $sql = "update cliente set nome='$nome',"
                . "telefone='$tel',"
                . "endereco='$end',"
                . "email='$email',"
                . "idade=$idade,"
                . "salario=$sal where cod_cliente=$cod_cliente";
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
    
    function busca($conexao, $cod_cliente) {
        $resultado = mysqli_query($conexao,
                "select * from cliente where cod_client=$cod_cliente");
        return mysqli_fetch_assoc($resultado);
    }
    

