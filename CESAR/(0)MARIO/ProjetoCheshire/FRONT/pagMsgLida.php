<!DOCTYPE html>
<html lang="pt-Br">
<?php
session_start();
include("../BACK/conexao.php");
include("../BACK/bancoMensagem.php");
?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensagens lidas</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark text-light">
        <?php include_once('includes/NavMensagens/listas.php'); ?>
    </nav>

    <div class="container text-center">
        <h1>Mensagens lidas</h1><br>


        <table class="table table-borderles table-hover">
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
            $mensagens = listaMensagensLidas($conexao, $_SESSION['rm']);
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
                    <td><a class="btn btn-outline-success" href="../BACK/excluida.php?cod_mensagem=
                       <?php echo $mensagem['cod_mensagem'] ?>">Excluir</a>
                    </td>
                    <td><a class="btn btn-outline-success" href="pagResponderMsg.php?cod_mensagem=
                       <?php echo $mensagem['cod_mensagem'] ?>">Responder</a></td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>

</body>

</html>