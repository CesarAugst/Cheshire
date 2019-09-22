<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pag_listar_cliente" title="Listar as mensagens" >Lista</a>
        <a href="pag_menu" title="Voltar ao menu principal" >menu</a>
        <form method="POST" action="verificaEnvio.php">
            <pre>
                Nome: <input type="text" name="txtRem"><br> 
                Destinatário: <input type="text" name="txtDes"><br>
                Conteúdo: <input type="text" name="txtCon"><br>
                Anonimato: <input type="text" name="txtAno"><br>
                <input type="submit" value="Cadastrar" name="btn"><br>
            </pre>
        </form>
    </body>
</html>
