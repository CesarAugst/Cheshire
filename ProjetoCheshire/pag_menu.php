<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['log'] != "ativo"){
    session_destroy();
    header("location: pag_login.php");
}
echo "Olá, <b>" . $_SESSION['nome'].
        "</b>, bem vindo ao sistema. ";
echo "<a href='logout.php'>SAIR</a>"
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Bem vindo ao sistema</h1>

    </body>
</html>
