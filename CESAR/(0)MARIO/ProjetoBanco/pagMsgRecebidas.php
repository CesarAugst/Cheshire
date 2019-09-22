<!DOCTYPE html>
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
        <a href="pagEnviar" title="Clique para enviar uma mensagem" >Enviar mensagem</a><br>
        <a href="pagMenuPrincipal" title="Retornar ao menu principal" >menu</a><br>
        <a href="pagMsgLida" title="Visualizar mensagens lidas" >Mensagens lidas</a><br>
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
                <td><a href="pagLidas.php?cod_mensagem=
                       <?php echo $mensagem['cod_mensagem'] ?>">Marcar como lida</a> 
                </td>
                <td><a href="pagAlterarMsg.php?cod_mensagem=
                       <?php echo $mensagem['cod_mensagem'] ?>">alterar</a></td>
            </tr>
            <?php
                endforeach;
            ?>
        </table>
        
    </body>
</html>
