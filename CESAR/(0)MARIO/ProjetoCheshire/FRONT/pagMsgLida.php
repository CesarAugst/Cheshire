<!DOCTYPE html>
<html lang="pt-Br">
<?php
session_start();
include("../BACK/conexao.php");
include("../BACK/bancoMensagem.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensagens lidas</title>
</head>

<body>
    <a href="pagEnviar" title="Clique para enviar uma mensagem">Enviar mensagem</a><br>
    <a href="pagMenuPrincipal" title="Retornar ao menu principal">menu</a><br>
    <a href="pagMsgLida" title="Visualizar mensagens lidas">Mensagens lidas</a><br>
    <h1>Mensagens lidas</h1><br>


    <table border="1">
        <tr>
            <td>id da Mensagem</td>
            <td>Remetente</td>
            <td>Destinatario</td>
            <td>Conteudo</td>
            <td>Anonimato</td>
            <td>Enviada</td>
            <td>Lida</td>
            <td>Exlcuir</td>
            <td>Responder</td>
        </tr>

        <?php
        $mensagens = listaMensagensLidas($conexao,$_SESSION['nome']);
        foreach ($mensagens as $mensagem) :
            ?>

            <tr>
                <td><?php echo $mensagem['cod_mensagem'] ?></td>
                <td><?php echo $mensagem['remetente'] ?></td>
                <td><?php echo $mensagem['destinatario'] ?></td>
                <td><?php echo $mensagem['conteudo'] ?></td>
                <td><?php echo $mensagem['anonimato'] ?></td>
                <td><?php echo $mensagem['dataEnviada'] ?></td>
                <td><?php echo $mensagem['dataLida'] ?></td>
                <td><a href="../BACK/pagExcluida.php?cod_mensagem=
                       <?php echo $mensagem['cod_mensagem'] ?>">Excluir</a>
                </td>
                <td><a href="pagResponderMsg.php?cod_mensagem=
                       <?php echo $mensagem['cod_mensagem'] ?>">Responder</a></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>

</body>

</html>