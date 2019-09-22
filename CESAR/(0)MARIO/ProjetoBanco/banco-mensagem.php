<?php
    function inserir($conexao, $remetente, $destinatario, $conteudo, $anonimato) {
        $sql = "insert into mensagem values ('default,'$remetente', '$destinatario', '$conteudo', '$anonimato', default)";
        return mysqli_query($conexao, $sql);
    }
    
    function alterar($conexao, $nome, $tel, $end, $email, $idade, $sal, $cod_cliente){
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
    
    function listaClientes($conexao) {
        $clientes = array();
        $resultado = mysqli_query($conexao, "select * from cliente");
        
        while ($cliente = mysqli_fetch_assoc($resultado)) {
            array_push($clientes, $cliente);
        }
        return $clientes;
    }
    
    function busca($conexao, $cod_cliente) {
        $resultado = mysqli_query($conexao,
                "select * from cliente where cod_client=$cod_cliente");
        return mysqli_fetch_assoc($resultado);
    }
    

