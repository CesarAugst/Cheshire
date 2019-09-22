<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php
include("conexao.php");
include("bancoMensagem.php");
?>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pagEnviar" title="Clique para enviar uma mensagem" >Enviar mensagem</a>
        <a href="pag_menu" title="Retornar ao menu principal" >menu</a>
        <h1>Menagens recebidas</h1><br>
        
        
        <table border="1">
            <tr>
                <td>id da Mensagem</td>
                <td>Remetente</td>
                <td>Destinatario</td>
                <td>Conteudo</td>
                <td>Anonimato</td>
                <td>Quando</td>
                <td>Exlcuir</td>
                <td>Alterar</td>
            </tr>
            
            <?php
                $mensagens = listaMensagens($conexao);
                foreach ($mensagens as $mensagem):
            ?>
            
            <tr>
                <td><?php echo $mensagem['cod_mensagem'] ?></td>
                <td><?php echo $mensagem['remetente'] ?></td>
                <td><?php echo $mensagem['destinatario'] ?></td>
                <td><?php echo $mensagem['conteudo'] ?></td>
                <td><?php echo $mensagem['anonimato'] ?></td>
                <td><?php echo $mensagem['data'] ?></td>
                <td><a href="pag_excluir_cliente.php?cod_cliente=
                       <?php echo $mensagem['cod_cliente'] ?>">excluir</a> 
                </td>
                <td><a href="pag_alterar_cliente.php?cod_cliente=
                       <?php echo $mensagem['cod_cliente'] ?>">alterar</a></td>
            </tr>
            <?php
                endforeach;
            ?>
        </table>
        
    </body>
</html>
