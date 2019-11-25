<!DOCTYPE html>
<html lang="pt-BR">
<style>thead{background-color:#5CB85C;color:white}</style>
<?php
include("../BACK/conexao.php");
include("../BACK/bancoMensagem.php");
session_start();
if ($_SESSION['log'] != 'ativo') {
	session_destroy();
	header("location: pagLogin.php");
}
?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="meuCss/estiloso.css">
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark text-light">
        <?php include_once('includes/NavMensagens/listas.php'); ?>
    </nav>
    <br><br>
    <div class="container text-center">
        <h1>Mensagens enviadas por <?php echo $_SESSION['nome'] ?></h1><br>


        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">id da Mensagem</th>
                    <th scope="col">Remetente</th>
                    <th scope="col">Destinatario</th>
                    <th scope="col">Conteudo</th>
                    <th scope="col">Anonimato</th>
                    <th scope="col">Enviada</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <?php

            $mensagens = listaMensagensEnviadas($conexao, $_SESSION['rm']);

            foreach ($mensagens as $mensagem) :
                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $mensagem['id_mensagem'] ?></th>
                    <td><?php echo $mensagem['nome_remetente'] ?></td>
                    <td><?php echo $mensagem['nome_destinatario'] ?></td>
                    <td><?php echo $mensagem['conteudo'] ?></td>
                    <td><?php echo $mensagem['anonimato'] ?></td>
                    <td><?php echo $mensagem['data_enviada'] ?></td>
                    <td><a class="btn btn-outline-success" href="../BACK/excluidaRemetente.php?cod_mensagem=
                       <?php echo $mensagem['id_mensagem'] ?>">Excluir</a>
                    </td>
                </tr>
            
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
    <footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </footer>
</body>

</html>