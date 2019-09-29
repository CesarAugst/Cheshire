<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pagCaixaMsg.php" title="Listar as mensagens" >Lista</a>
        <a href="pagMenuPrincipal" title="Voltar ao menu principal" >menu</a>
        <form method="POST" action="../BACK/verificaEnvio.php">
            <?php
            session_start();
            
            if($_SESSION['tipo'] == 'orientador'){
                include_once('includes/EnviarMensagem/envOri.inc');
            }else{
                include_once('includes/EnviarMensagem/envAlu.inc');
            }
             ?>
        </form>
    </body>
</html>
