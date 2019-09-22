<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pag_listar_cliente" title="Bora listar vagabundo" >Lista</a>
        <a href="pag_menu" title="Voltando ao menu" >menu</a>
        <form method="POST" action="verificaCadastro.php">
            <pre>
                Nome: <input type="text" name="txtnome"><br> 
                Telefone: <input type="text" name="txttel"><br>
                Endereço: <input type="text" name="txtend"><br>
                Email: <input type="text" name="txtemail"><br>
                Idade: <input type="text" name="txtidade"><br>
                Salário: <input type="text" name="txtsal"><br>
                <input type="submit" value="Cadastrar" name="btn"><br>
            </pre>
        </form>
    </body>
</html>
