<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['log'] != "ativo") {
    session_destroy();
    header("location: pagLogin.php");
}
echo "<nav class = 'navbar navbar-light bg-dark text-light'>
    <a class = 'navbar-brand'> Olá, <em><b>" . $_SESSION['nome'] .
    "</em></b>, bem vindo ao sistema.</a>";
echo "<a class = 'btn btn-success btn-lg' href='../BACK/logout.php'>LOGOUT</a>
      </nav>
    ";
?>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="meuCss/estiloso.css">
    <meta charset="UTF-8">
    <title></title>
</head>
<div style="background-color: green">

    <body>
        <div class="container text-center text-light" style="background-color: black">
            <div class="col-md-12">
                <br><br>
                <h1>Bem vindo ao sistema</h1><br><br>
                <a class="btn btn-block btn-lg btn-success" href="pagCaixaMsg" title="Visualizar mensagens recebidas">Mensagens recebidas</a><br>
                <a class="btn btn-block btn-lg btn-success" href="pagEnviar.php">Enviar mensagem</a><br>
                <a class="btn btn-block btn-lg btn-success" href="pagMsgLida.php">Visualizar mensagens lidas</a><br>
                <a class="btn btn-block btn-lg btn-success" href="pagCaixaMsgEnv.php">Visualizar mensagens enviadas</a><br>
                <a class="btn btn-block btn-lg btn-danger" href="pagInicio.php">Sair do menu de mensagens</a><br>
            </div>
        </div>
</div>
</body>

</html>