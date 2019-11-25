<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['log'] != 'ativo') {
	session_destroy();
	header("location: pagLogin.php");
}
include("../BACK/conexao.php");
include("../BACK/bancoMensagem.php");
?>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="meuCss/estiloso.css">
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


        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">id da Mensagem</th>
                    <th scope="col">Remetente</th>
                    <th scope="col">Destinatario</th>
                    <th scope="col">Conteudo</th>
                    <th scope="col">Anonimato</th>
                    <th scope="col">Exlcuir</th>
                    <th scope="col">Responder</th>
                </tr>
            </thead>
            <?php
            $mensagens = listaMensagensLidas($conexao, $_SESSION['rm']);
            foreach ($mensagens as $mensagem) :
                ?>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $mensagem['id_mensagem'] ?></th>
                        <td><?php echo $mensagem['nome_remetente'] ?></td>
                        <td><?php echo $mensagem['nome_destinatario'] ?></td>
                        <td><?php echo $mensagem['conteudo'] ?></td>
                        <td><?php echo $mensagem['anonimato'] ?></td>
                        <td><a class="btn btn-outline-success" href="../BACK/excluidaDestinatario.php?cod_mensagem=
                       <?php echo $mensagem['id_mensagem'] ?>">Excluir</a>
                        </td>
                        <td><a class="btn btn-outline-success" href="pagResponderMsg.php?cod_mensagem=
                       <?php echo $mensagem['id_mensagem'] ?>">Responder</a></td>
                    </tr>

                <?php endforeach;?>
                </tbody>
        </table>
    </div>

</body>

</html>