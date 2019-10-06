<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <nav class="navbar navbar-light bg-dark text-light">
        <?php include_once('includes/NavMensagens/listas.php'); ?>
    </nav>

    <form method="POST" action="../BACK/verificaEnvio.php">
        <?php
        session_start();
        $nome = $_SESSION['nome'];

        if ($_SESSION['tipo'] == 'orientador') {
            include_once('includes/EnviarMensagem/envOri.inc');
        } else {
            include_once('includes/EnviarMensagem/envAlu.inc');
        }
        ?>
    </form>
</body>

</html>