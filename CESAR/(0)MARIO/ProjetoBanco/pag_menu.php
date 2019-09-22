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
    <li><a href="pagEnviar.php">Enviar mensagem</a>
            <?php
            $_SESSION['verifica'] = 'ativo';
            ?>     
        </ul></li>
    <li><a href="#">Gerenciamento</a>
        <ul><li><a href="pag_listar_cliente.php">Cliente</a></li>
            <?php
            $_SESSION['verifica'] = 'ativo';
            die();
            ?>
        </ul></li>
    </body>
</html>
