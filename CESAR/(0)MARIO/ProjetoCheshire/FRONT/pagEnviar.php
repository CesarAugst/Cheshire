<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pagMsgRecebidas.php" title="Listar as mensagens" >Lista</a>
        <a href="pagMenuPrincipal" title="Voltar ao menu principal" >menu</a>
        <form method="POST" action="verificaEnvio.php">
            <pre>
                Remetente: <input type="text" name="txtRem"><br> 
                Conteúdo: <input type="text" name="txtCon"><br>
                Anonimato: <input type="text" name="txtAno"><br>
                <input type="submit" value="Enviar" name="btn"><br>
            </pre>
        </form>
    </body>
</html>
