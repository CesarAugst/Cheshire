<?php
    function enviarComum($conexao, $remetente, $conteudo, $anonimato) {
        
        $sql = "insert into mensagem values (default, '$remetente', default, '$conteudo', '$anonimato', default,'N',null,'N',null);";
        return mysqli_query($conexao, $sql);
    }

    function enviarOrientador($conexao, $destinatario, $remetente, $conteudo) {
        
        $sql = "insert into mensagem values (default, '$remetente', '$destinatario', '$conteudo', default, default,'N',null,'N',null);";
        return mysqli_query($conexao, $sql);
    }
    
    function alterar($conexao, $remetente, $destinatario, $conteudo, $anonimato, $cod_mensagem){
        $sql = "update mensagem set remetente='$remetente',"
                . "destinatario='$destinatario',"
                . "conteudo='$conteudo',"
                . "dataEnviada = default, "
                . "anonimato='$anonimato' where cod_mensagem=$cod_mensagem";
        return mysqli_query($conexao, $sql);
    } 
    
    function ler($conexao, $cod_mensagem) {
        $sql = "call marcaLida($cod_mensagem)";
        return mysqli_query($conexao,$sql);
    }
    
    function excluir($conexao, $cod_mensagem) {
        $sql = "delete from mensagem where cod_mensagem = $cod_mensagem";
        return mysqli_query($conexao,$sql);
    }

    function listaMensagens($conexao, $cod) {
        $mensagens = array();
        $resultado = mysqli_query($conexao, "call caixaEntrada('$cod')");//select * from mensagem where (remetente =  '$cod' || destinatario = '$cod') && (stautsLida = 'N' && statusExcluida = 'N')"
        
        while ($mensagem = mysqli_fetch_assoc($resultado)) {
            array_push($mensagens, $mensagem);
        }
        return $mensagens;
    }
    
    function listaMensagensLidas($conexao,$cod) {
        $mensagens = array();
        $resultado = mysqli_query($conexao, "call mensagemLida('$cod')");//select * from mensagem where (remetente =  '$cod' || destinatario = '$cod') && (stautsLida = 'S' && statusExcluida = 'N')"
        
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
    

