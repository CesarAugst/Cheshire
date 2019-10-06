<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pagCaixaMsg.php" title="Listar as mensagens" >Lista</a>
        <a href="pagMenuPrincipal" title="Voltar ao menu principal" >menu</a>
        <form method="POST" action="../BACK/verificaEnvio.php">
            <?php
            session_start();
            $nome=$_SESSION['nome'];
            
            if($_SESSION['tipo'] == 'orientador'){
                include_once('includes/EnviarMensagem/envOri.inc');
            }else{
                include_once('includes/EnviarMensagem/envAlu.inc');
            }
             ?>
        </form>
    </body>
</html>
