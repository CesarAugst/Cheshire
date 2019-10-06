<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
session_start();
if ($_SESSION['log'] != "ativo") {
    session_destroy();
    header("location: pag_login.php");
}
echo "<nav class = 'navbar navbar-light bg-dark text-light'>
    <a class = 'navbar-brand'> Olá, <em><b>" . $_SESSION['nome'] .
    "</em></b>, bem vindo ao sistema.</a>";
echo "<a class = 'btn btn-success btn-lg' href='../BACK/logout.php'>SAIR</a>
      </nav>
    ";
?>
<html>

<head>

    <meta charset="UTF-8">
    <title></title>
</head>
<div style="background-color: green">

    <body>
        <div class="container text-center text-light" style="background-color: black">
            <div class="col-md-12">
                <br><br>
                <h1>Bem vindo ao sistema</h1><br><br>
                <a class="btn btn-block btn-lg btn-success" href="pagEnviar.php">Enviar mensagem
                    <?php
                    $_SESSION['verifica'] = 'ativo';
                    ?>
                </a><br>

                <a class="btn btn-block btn-lg btn-success" href="#">
                    Gerenciamento
                </a><br>

                <a class="btn btn-block btn-lg btn-success" href="pag_listar_cliente.php">Cliente
                    <?php
                    $_SESSION['verifica'] = 'ativo';
                    die();
                    ?>
                </a><br>
            </div>
        </div>
</div>
</body>

</html>